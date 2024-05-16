<?php
/*
 * @copyright   Copyright (C) 2010-2024 Combodo SAS
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

namespace Combodo\iTop\Application\WelcomePopup\Provider;

use Dict;
use AbstractWelcomePopupExtension;
use utils;
use Combodo\iTop\Application\WelcomePopup\MessageFactory;

/**
 * Implementation of the "default" Welcome Popup message
 * @since 3.2.0
 */
class DefaultProvider extends AbstractWelcomePopupExtension
{
	/**
	 * @inheritDoc
	 */
	public function GetMessages(): array
	{
		return [
			MessageFactory::MakeForLeftTextsRightIllustration(
				"320_01",
				Dict::S("UI:WelcomePopup:Message:320_01:Title"),
				Dict::S("UI:WelcomePopup:Message:320_01:Description"),
				utils::GetAbsoluteUrlAppRoot() . "images/illustrations/undraw_relaunch_day.svg"
			),
		];
	}
}