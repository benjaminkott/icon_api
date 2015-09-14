<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}


if (TYPO3_MODE === 'BE') {

	/**
	 * Provides an example .htaccess file for Apache after extension is installed and shows a warning if TYPO3 is not running on Apache.
	 */
	$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher');
	$signalSlotDispatcher->connect(
		\TYPO3\CMS\Core\Imaging\IconFactory::class,
		'buildIconForResourceSignal',
		\BK2K\IconApi\Signal::class,
		'buildIconForResourceSignal'
	);

}
