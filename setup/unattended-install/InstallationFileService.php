<?php

require_once(dirname(__FILE__, 3) . '/approot.inc.php');
require_once(APPROOT.'/application/utils.inc.php');

$aPath = [
	'2.7' => 'application/clipage.class.inc.php',
	'3.0' => 'sources/application/WebPage/CLIPage.php',
	'3.1' => 'sources/Application/WebPage/CLIPage.php',
];

foreach ($aPath as $sVersion => $sPath){
	$sAbsolutePath = APPROOT.$sPath;
	if (is_file($sAbsolutePath)) {
		require_once $sAbsolutePath;
		break;
	}
}

require_once(APPROOT.'/core/config.class.inc.php');
require_once(APPROOT.'/core/log.class.inc.php');
require_once(APPROOT.'/core/kpi.class.inc.php');
require_once(APPROOT.'/core/cmdbsource.class.inc.php');
require_once(APPROOT.'/setup/setuppage.class.inc.php');
require_once(APPROOT.'/setup/wizardcontroller.class.inc.php');
require_once(APPROOT.'/setup/wizardsteps.class.inc.php');
require_once(APPROOT.'/setup/applicationinstaller.class.inc.php');

class InstallationFileService {
	private $sTargetEnvironment;
	private $sInstallationPath;
	private $aSelectedModules;
	private $aSelectedExtensions;
	private $aUnSelectedModules;
	private $aAutoSelectModules;
	private $bInstallationOptionalChoicesChecked;

	/**
	 * @param string $sInstallationPath
	 * @param string $sTargetEnvironment
	 * @param array $aSelectedExtensions
	 * @param bool $bInstallationOptionalChoicesChecked : this option is used only when no extensions are selected (ie empty $aSelectedExtensions)
	 */
	public function __construct(string $sInstallationPath, string $sTargetEnvironment='production', array $aSelectedExtensions = [], bool $bInstallationOptionalChoicesChecked=true) {
		$this->sInstallationPath = $sInstallationPath;
		$this->aSelectedModules = [];
		$this->aUnSelectedModules = [];
		$this->sTargetEnvironment = $sTargetEnvironment;
		$this->aSelectedExtensions = $aSelectedExtensions;
		$this->bInstallationOptionalChoicesChecked = $bInstallationOptionalChoicesChecked;
	}

	public function GetSelectedModules(): array {
		return $this->aSelectedModules;
	}

	public function GetUnSelectedModules(): array {
		return $this->aUnSelectedModules;
	}

	public function Init(): void {
		clearstatcache();

		$this->ProcessDefaultModules();
		$this->ProcessInstallationChoices();
		$this->ProcessAutoSelectModules();
	}

	public function ProcessInstallationChoices(): void {
		$oXMLParameters = new XMLParameters($this->sInstallationPath);
		$aSteps = $oXMLParameters->Get('steps', []);
		if (! is_array($aSteps)) {
			return;
		}

		foreach ($aSteps as $aStepInfo) {
			$aOptions = $aStepInfo["options"] ?? null;
			if (! is_null($aOptions) && is_array($aOptions)) {
				foreach ($aOptions as $aChoiceInfo) {
					$this->ProcessSelectedChoice($aChoiceInfo, $this->bInstallationOptionalChoicesChecked);
				}
			}
			$aOptions = $aStepInfo["alternatives"] ?? null;
			if (! is_null($aOptions) && is_array($aOptions)) {
				foreach ($aOptions as $aChoiceInfo) {
					$this->ProcessSelectedChoice($aChoiceInfo, false);
				}
			}
		}

		foreach ($this->aSelectedModules as $sModuleId => $sVal){
			if (array_key_exists($sModuleId, $this->aUnSelectedModules)){
				unset($this->aUnSelectedModules[$sModuleId]);
			}
		}
	}

	private function ProcessUnSelectedChoice($aChoiceInfo) {
		if (!is_array($aChoiceInfo)) {
			return;
		}

		$aCurrentModules = $aChoiceInfo["modules"] ?? [];
		foreach ($aCurrentModules as $sModuleId){
			$this->aUnSelectedModules[$sModuleId] = true;
		}

		$aAlternatives = $aChoiceInfo["alternatives"] ?? null;
		if (!is_null($aAlternatives) && is_array($aAlternatives)) {
			foreach ($aAlternatives as $aSubChoiceInfo) {
				$this->ProcessUnSelectedChoice($aSubChoiceInfo);
			}
		}

		if (array_key_exists('sub_options', $aChoiceInfo)) {
			if (array_key_exists('options', $aChoiceInfo['sub_options'])) {
				$aSubOptions = $aChoiceInfo['sub_options']['options'];
				if (!is_null($aSubOptions) && is_array($aSubOptions)) {
					foreach ($aSubOptions as $aSubChoiceInfo) {
						$this->ProcessUnSelectedChoice($aSubChoiceInfo);
					}
				}
			}
			if (array_key_exists('alternatives', $aChoiceInfo['sub_options'])) {
				$aSubAlternatives = $aChoiceInfo['sub_options']['alternatives'];
				if (!is_null($aSubAlternatives) && is_array($aSubAlternatives)) {
					foreach ($aSubAlternatives as $aSubChoiceInfo) {
						$this->ProcessUnSelectedChoice($aSubChoiceInfo);
					}
				}
			}
		}
	}

	private function ProcessSelectedChoice($aChoiceInfo, bool $bAllChecked) {
		if (!is_array($aChoiceInfo)) {
			return;
		}

		$sDefault = $aChoiceInfo["default"] ?? "false";
		$sMandatory = $aChoiceInfo["mandatory"] ?? "false";

		$aCurrentModules = $aChoiceInfo["modules"] ?? [];
		if (0 === count($this->aSelectedExtensions)){
			$bSelected = $bAllChecked || $sDefault === "true" || $sMandatory === "true";
		} else {
			$sExtensionCode = $aChoiceInfo["extension_code"] ?? null;
			$bSelected = $sMandatory === "true" ||
				(null !== $sExtensionCode && in_array($sExtensionCode, $this->aSelectedExtensions));
		}

		foreach ($aCurrentModules as $sModuleId){
			if ($bSelected) {
				$this->aSelectedModules[$sModuleId] = true;
			} else {
				$this->aUnSelectedModules[$sModuleId] = true;
			}
		}

		$aAlternatives = $aChoiceInfo["alternatives"] ?? null;
		if (!is_null($aAlternatives) && is_array($aAlternatives)) {
			foreach ($aAlternatives as $aSubChoiceInfo) {
				if ($bSelected) {
					$this->ProcessSelectedChoice($aSubChoiceInfo, $bAllChecked);
				} else {
					$this->ProcessUnSelectedChoice($aSubChoiceInfo);
				}
			}
		}

		if (array_key_exists('sub_options', $aChoiceInfo)) {
			if (array_key_exists('options', $aChoiceInfo['sub_options'])) {
				$aSubOptions = $aChoiceInfo['sub_options']['options'];
				if (!is_null($aSubOptions) && is_array($aSubOptions)) {
					foreach ($aSubOptions as $aSubChoiceInfo) {
						if ($bSelected) {
							$this->ProcessSelectedChoice($aSubChoiceInfo, $bAllChecked);
						} else {
							$this->ProcessUnSelectedChoice($aSubChoiceInfo);
						}
					}
				}
			}
			if (array_key_exists('alternatives', $aChoiceInfo['sub_options'])) {
				$aSubAlternatives = $aChoiceInfo['sub_options']['alternatives'];
				if (!is_null($aSubAlternatives) && is_array($aSubAlternatives)) {
					foreach ($aSubAlternatives as $aSubChoiceInfo) {
						if ($bSelected) {
							$this->ProcessSelectedChoice($aSubChoiceInfo, false);
						} else {
							$this->ProcessUnSelectedChoice($aSubChoiceInfo);
						}
					}
				}
			}
		}
	}

	private function GetExtraDirs() : array {
		$aSearchDirs = [];

		$aDirs = [
			'/datamodels/1.x',
			'/datamodels/2.x',
			'data/' . $this->sTargetEnvironment . '-modules',
			'extensions',
		];
		foreach ($aDirs as $sRelativeDir){
			$sDirPath = APPROOT.$sRelativeDir;
			if (is_dir($sDirPath))
			{
				$aSearchDirs[] = $sDirPath;
			}
		}

		return $aSearchDirs;
	}

	public function ProcessDefaultModules() : void {
		$sProductionModuleDir = APPROOT.'data/' . $this->sTargetEnvironment . '-modules/';

		$oProductionEnv = new RunTimeEnvironment();
		$aAvailableModules = $oProductionEnv->AnalyzeInstallation(MetaModel::GetConfig(), $this->GetExtraDirs(), false, null);

		$this->aAutoSelectModules = [];
		foreach ($aAvailableModules as $sModuleId => $aModule) {
			if (($sModuleId != ROOT_MODULE)) {
				if (isset($aModule['auto_select'])) {
					$this->aAutoSelectModules[$sModuleId] = $aModule;
					continue;
				}

				if (($aModule['category'] == 'authentication') || (!$aModule['visible'])) {
					$this->aSelectedModules[$sModuleId] = true;
					continue;
				}

				$bIsExtra = (array_key_exists('root_dir', $aModule) && (strpos($aModule['root_dir'],
							$sProductionModuleDir) !== false)); // Some modules (root, datamodel) have no 'root_dir'
				if ($bIsExtra) {
					// Modules in data/production-modules/ are considered as mandatory and always installed
					$this->aSelectedModules[$sModuleId] = true;
				}
			}
		}
	}

	public function ProcessAutoSelectModules() : void {
		foreach($this->aAutoSelectModules as $sModuleId => $aModule)
		{
			try {
				$bSelected = false;
				SetupInfo::SetSelectedModules($this->aSelectedModules);
				eval('$bSelected = ('.$aModule['auto_select'].');');
				if ($bSelected)
				{
					// Modules in data/production-modules/ are considered as mandatory and always installed
					$this->aSelectedModules[$sModuleId] = true;
				}
			}
			catch (Exception $e) {
			}
		}
	}
}