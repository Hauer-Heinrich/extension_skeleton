<?php
defined('TYPO3_MODE') || die('Access denied.');

$vendor = 'HauerHeinrich';
$extension = 'extension_skeleton';
$extensionname = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($extension);

// START: Plugin listview
$plugin = 'Listview';
$pluginSignature = str_replace('_', '', $extension) . '_' . strtolower($plugin);


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $vendor . '.' . $extensionname,
    $plugin,
    'my plugin title'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,select_key,pages,recursive';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignature,
    'FILE:EXT:' . $extension . '/Configuration/FlexForms/' . $pluginSignature . '.xml'
);
// END: Plugin listview
