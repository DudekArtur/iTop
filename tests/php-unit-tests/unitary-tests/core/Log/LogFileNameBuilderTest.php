<?php
/*
 * @copyright   Copyright (C) 2010-2023 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

namespace Combodo\iTop\Test\UnitTest\Core\Log;


use Combodo\iTop\Test\UnitTest\ItopTestCase;
use DailyRotatingLogFileNameBuilder;
use DateTime;

class LogFileNameBuilderTest extends ItopTestCase
{
	const TEST_LOGFILE_PREFIX = 'fileNameBuilder.test';
	const TEST_LOGFILE_EXTENSION = 'log';

	/**
	 * @param $sLogFile
	 * @param \DateTime $oNewModificationDate
	 *
	 * @uses \clearstatcache() if not called, the next filemtime() call will return the PHP cached date instead of the real one
	 */
	private function ChangeFileModificationDate($sLogFile, DateTime $oNewModificationDate)
	{
		touch($sLogFile, $oNewModificationDate->getTimestamp());
		clearstatcache(true, $sLogFile);
	}

	protected function setUp(): void
	{
		parent::setUp();

		$this->RequireOnceItopFile('core/log.class.inc.php');
	}

	protected function tearDown(): void
	{
		parent::tearDown();

		// remove log files created in the test
		$aTestLogFiles = glob(__DIR__.DIRECTORY_SEPARATOR.self::TEST_LOGFILE_PREFIX.'*.'.self::TEST_LOGFILE_EXTENSION);
		foreach ($aTestLogFiles as $sLogFile) {
			unlink($sLogFile);
		}
	}

	public function testCheckAndRotateLogFile()
	{
		$sLogFile = __DIR__.DIRECTORY_SEPARATOR.self::TEST_LOGFILE_PREFIX.'.'.self::TEST_LOGFILE_EXTENSION;
		$oFileBuilder = new DailyRotatingLogFileNameBuilder($sLogFile);

		if (file_exists($sLogFile))
		{
			unlink($sLogFile);
		}

		$bIsFileExists = $oFileBuilder->IsLogFileExists();
		$this->assertFalse($bIsFileExists, 'Test log file does not exist');

		$hLogFile = fopen($sLogFile, 'a');
		$sDate = date('Y-m-d H:i:s');
		$sTestClassName = self::class;
		fwrite($hLogFile, "$sDate | This is a line generated by $sTestClassName\n");
		fclose($hLogFile);
		$iLogDateLastModifiedTimeStamp = filemtime($sLogFile);
		$oLogFileLastModified = DateTime::createFromFormat('U', $iLogDateLastModifiedTimeStamp);

		$sRotatedLogFile = $oFileBuilder->GetRotatedFileName($oLogFileLastModified);
		$oFileBuilder->CheckAndRotateLogFile();
		$this->assertFileExists($sLogFile, 'Test log file modification date is today, original file still exists after rotation call');
		$this->assertFileDoesNotExist($sRotatedLogFile, 'No rotation occurred yet');

		$oTimeYesterday = new DateTime('yesterday');
		$sRotatedLogFile = $oFileBuilder->GetRotatedFileName($oTimeYesterday);
		$this->ChangeFileModificationDate($sLogFile, $oTimeYesterday);

		// changing modification date, but do not reset cached filebuilder date => no change
		$oFileBuilder->CheckAndRotateLogFile();
		$this->assertFileExists($sLogFile, 'Test log file modification date is yesterday but filebuilder use its cache, original file still exists after rotation call');
		$this->assertFileDoesNotExist($sRotatedLogFile, 'No rotation occurred yet');

		// changing modification date AND resetting filebuilder date cache
		$oFileBuilder->ResetLastModifiedDateForFile();
		$oFileBuilder->CheckAndRotateLogFile();
		$this->assertFileDoesNotExist($sLogFile, 'Test log file modification date is yesterday, file rotated !');
		$this->assertFileExists($sRotatedLogFile, 'Rotation was not done');

		// file cleanup will be done in tearDown !
	}

	public function ShouldRotateProvider()
	{
		return array(
			'DAILY Same day' => array('DailyRotatingLogFileNameBuilder', '2020-02-01 00:00', '2020-02-01 15:42', false),
			'DAILY Same week, different day less 24h diff' => array('DailyRotatingLogFileNameBuilder', '2020-02-01 12:00', '2020-02-02 09:00', true),
			'DAILY Same week, different day' => array('DailyRotatingLogFileNameBuilder', '2020-02-01 00:00', '2020-02-02 00:00', true),
			'DAILY 1 week diff' => array('DailyRotatingLogFileNameBuilder', '2020-02-01 00:00', '2020-02-08 00:00', true),
			'WEEKLY Same week' => array('WeeklyRotatingLogFileNameBuilder', '2020-02-01 00:00', '2020-02-01 00:00', false),
			'WEEKLY 1 week diff, same month' => array('WeeklyRotatingLogFileNameBuilder', '2020-02-01 00:00', '2020-02-08 00:00', true),
			'WEEKLY 2 weeks diff, same month' => array('WeeklyRotatingLogFileNameBuilder', '2020-02-01 00:00', '2020-02-15 00:00', true),
			'WEEKLY 1 week diff, different month' => array('WeeklyRotatingLogFileNameBuilder', '2020-01-27 00:00', '2020-02-03 00:00', true),
			'WEEKLY same week, different month' => array('WeeklyRotatingLogFileNameBuilder', '2020-01-27 00:00', '2020-02-02 00:00', false),
			'WEEKLY 1 week diff, different year' => array('WeeklyRotatingLogFileNameBuilder', '2019-12-30 00:00', '2020-01-06 00:00', true),
			'WEEKLY same week, different year' => array('WeeklyRotatingLogFileNameBuilder', '2019-12-30 00:00', '2020-01-05 00:00', true),
			'MONTHLY same month' => array('MonthlyRotatingLogFileNameBuilder', '2020-02-10 00:00', '2020-02-14 00:00', false),
			'MONTHLY on first day which is a sunday' => array('MonthlyRotatingLogFileNameBuilder', '2020-01-30 00:00', '2020-02-01 00:00', true),
		);
	}

	/**
	 * @param string $sFileNameBuilderClass RotatingLogFileNameBuilder impl
	 * @param string $sDateModified format Y-m-d H:i
	 * @param string $sDateNow format Y-m-d H:i
	 * @param bool $bExpected
	 *
	 * @dataProvider ShouldRotateProvider
	 */
	public function testShouldRotate($sFileNameBuilderClass, $sDateModified, $sDateNow, $bExpected)
	{
		$oDateModified = DateTime::createFromFormat('Y-m-d H:i', $sDateModified);
		$oDateNow = DateTime::createFromFormat('Y-m-d H:i', $sDateNow);

		/** @var \RotatingLogFileNameBuilder $oFileBuilder */
		$oFileBuilder = new $sFileNameBuilderClass();
		$bShouldRotate = $oFileBuilder->ShouldRotate($oDateModified, $oDateNow);

		$this->assertEquals($bExpected, $bShouldRotate);
	}

	public function CronNextOccurrenceProvider()
	{
		return array(
			'DAILY morning' => array('DailyRotatingLogFileNameBuilder', '2020-02-01 05:00', '2020-02-02 00:00'),
			'DAILY midnight' => array('DailyRotatingLogFileNameBuilder', '2020-02-01 00:00', '2020-02-02 00:00'),
			'WEEKLY monday 12:42' => array('WeeklyRotatingLogFileNameBuilder', '2020-02-03 12:42', '2020-02-10 00:00'),
			'WEEKLY monday 00:00' => array('WeeklyRotatingLogFileNameBuilder', '2020-02-03 00:00', '2020-02-10 00:00'),
			'WEEKLY tuesday 12:42' => array('WeeklyRotatingLogFileNameBuilder', '2020-02-04 12:42', '2020-02-10 00:00'),
			'WEEKLY sunday 12:42' => array('WeeklyRotatingLogFileNameBuilder', '2020-02-02 12:42', '2020-02-03 00:00'),
			'MONTHLY 12/02 12:42' => array('MonthlyRotatingLogFileNameBuilder', '2020-02-12 12:42', '2020-03-01 00:00'),
		);
	}

	/**
	 * @param string $sFileNameBuilderClass RotatingLogFileNameBuilder impl
	 * @param string $sDateNow format Y-m-d H:i
	 * @param string $sExpectedOccurrence format Y-m-d H:i
	 *
	 * @dataProvider CronNextOccurrenceProvider
	 */
	public function testCronNextOccurrence($sFileNameBuilderClass, $sDateNow, $sExpectedOccurrence)
	{
		$oDateNow = DateTime::createFromFormat('Y-m-d H:i', $sDateNow);

		/** @var \RotatingLogFileNameBuilder $oFileBuilder */
		$oFileBuilder = new $sFileNameBuilderClass();
		$oActualOccurrence = $oFileBuilder->GetCronProcessNextOccurrence($oDateNow);
		$sActualOccurrence = $oActualOccurrence->format('Y-m-d H:i');

		$this->assertEquals($sExpectedOccurrence, $sActualOccurrence);
	}
}
