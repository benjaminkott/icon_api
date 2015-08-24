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

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\PathUtility;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Backend module for Styleguide
 */
class OldIconViewHelper extends AbstractViewHelper {

	/**
	 * @param string $identifier
	 *
	 * @return string
	 */
	public function render($identifier = '') {
		$basePath = 'sysext/t3skin/images/icons/';
		$nameParts = GeneralUtility::trimExplode('-', $identifier);
		$folder = array_shift($nameParts);
		$basePath .= $folder . '/' . implode('-', $nameParts) . '.png';
		return '<img src="' . PathUtility::getAbsoluteWebPath($basePath) . '" />';
	}

}
