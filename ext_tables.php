<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

if (TYPO3_MODE === 'BE') {

	/**
	 * Register "IconApi" backend module
	 */
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'BK2K.icon_api',
		'help',
		'iconapi',
		'',
		array(
			'IconApi' => 'icons'
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:icon_api/Resources/Public/Icons/module.png',
			'labels' => 'LLL:EXT:icon_api/Resources/Private/Language/locallang_mod.xlf',
		)
	);

	// Initiate IconRegistry
	$iconRegistry = \TYPO3\CMS\Core\Imaging\IconRegistry::getInstance();

	// Register SVG
	$iconRegistry->registerIcon(
		'provider-svg',
		\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
		array(
			'source' => 'EXT:icon_api/Resources/Public/Icons/provider_svg_icon.svg'
		)
	);

	// Register Bitmap
	$iconRegistry->registerIcon(
		'provider-bitmap',
		\TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
		array(
			'source' => 'EXT:icon_api/Resources/Public/Icons/provider_bitmap_icon.png'
		)
	);

	// Register FontAwesome
	$iconRegistry->registerIcon(
		'provider-fontawesome',
		\TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
		array(
			'name' => 'desktop'
		)
	);


}
