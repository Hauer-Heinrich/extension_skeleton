<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(function() {

    $extension = "extension_skeleton";
    $extensionname = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($extension);
    $vendor = "HauerHeinrich";

    // Start: Plugin listview
    $plugin = 'Listview';

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        $vendor . '.' . $extensionname,
        $plugin,
        [
            // Allowed Controllers and there Actions = ControllerName => Actions
            'Example' => 'list, show'
        ],
        // non-cacheable actions
        [
            // ControllerName => Actions
        ]
    );
    // END: Plugin listview

    // Automatically include PageTS
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extension . '/Configuration/PageTS/mod.typoscript">'
    );

    // Register icons to use in TYPO3 - TS and extbase
    if (TYPO3_MODE === 'BE') {
        $icons = [
            // you can customize the name (IconIdentifier)
            $extension . '-plugin-' . strtolower($plugin) => 'user_plugin_listview.svg',
        ];

        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        foreach ($icons as $identifier => $path) {
            $iconRegistry->registerIcon(
                $identifier,
                \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                ['source' => 'EXT:' . $extension . '/Resources/Public/Icons/' . $path]
            );
        }
    }
});
