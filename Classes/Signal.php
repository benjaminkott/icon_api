<?php
namespace BK2K\IconApi;

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

use TYPO3\CMS\Core\Resource\ResourceInterface;

/**
 * Class Signal
 *
 * @package BK2K\IconApi
 */
class Signal {

	/**
	 * @param ResourceInterface $resource
	 * @param string $size
	 * @param array $options
	 * @param string  $iconIdentifier
	 * @param string $overlayIdentifier
	 *
	 * @return array
	 */
	public function buildIconForResourceSignal(ResourceInterface $resource, $size, array $options, $iconIdentifier, $overlayIdentifier) {
		$overlayIdentifier = 'overlay-restricted';
		return array($resource, $size, $options, $iconIdentifier, $overlayIdentifier);
	}

}
