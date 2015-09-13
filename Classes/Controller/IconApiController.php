<?php
namespace BK2K\IconApi\Controller;

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
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Backend module for Styleguide
 */
class IconApiController extends ActionController {

	/**
	 * Icons
	 */
	public function iconsAction() {
		$iconRegistry = GeneralUtility::makeInstance(IconRegistry::class);

        $allIcons = $iconRegistry->getAllRegisteredIconIdentifiers();
        $this->view->assign('allIcons', $allIcons);

        $overlays = array();
        foreach($allIcons as $key){
            if(substr($key, 0, strlen('overlay')) === 'overlay'){
                $overlays[] = $key;
            }
        }
		$this->view->assign('overlays', $overlays);

		$icons = $GLOBALS['TBE_STYLES']['spriteIconApi']['iconsAvailable'];
		$icons = array_filter($icons, function($var) {
			$firstPart = array_shift(GeneralUtility::trimExplode('-', $var));
			return in_array($firstPart, ['actions', 'apps', 'mimetypes', 'status']);
		});
		$this->view->assign('iconIdentifier', $icons);
	}

}
