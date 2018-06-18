<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(function() {

    $_EXTENSION = "extension_skeleton";
    $_EXTENSIONNAME = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTENSION);
    $_VENDOR = "HauerHeinrich";

    // Start: Plugin listview
    $_PLUGIN = 'Listview';

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        $_VENDOR . '.' . $_EXTENSIONNAME,
        $_PLUGIN,
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
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTENSION . '/Configuration/PageTS/mod.ts">'
    );

    // Register icons to use in TYPO3 - TS and extbase
    if (TYPO3_MODE === 'BE') {
        $icons = [
            // you can customize the name (IconIdentifier)
            $_EXTENSION . '-plugin-' . strtolower($_PLUGIN) => 'user_plugin_listview.svg',
        ];

        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        foreach ($icons as $identifier => $path) {
            $iconRegistry->registerIcon(
                $identifier,
                \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                ['source' => 'EXT:' . $_EXTENSION . '/Resources/Public/Icons/' . $path]
            );
        }
    }
});
