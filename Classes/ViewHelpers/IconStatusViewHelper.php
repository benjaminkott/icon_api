<?php
namespace BK2K\IconApi\ViewHelpers;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\Imaging\IconRegistry;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Backend module for Styleguide
 */
class IconStatusViewHelper extends AbstractViewHelper {

	/**
	 * @param string $identifier
	 *
	 * @return string
	 */
	public function render($identifier = '') {
		$iconRegistry = GeneralUtility::makeInstance(IconRegistry::class);
		return ($iconRegistry->isRegistered($identifier)) ? 'registered' : 'missing';
	}

}
