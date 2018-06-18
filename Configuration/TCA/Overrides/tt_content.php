<?php
defined('TYPO3_MODE') || die('Access denied.');

$_VENDOR = "HauerHeinrich";
$_EXTENSION = "extension_skeleton";
$_EXTENSIONNAME = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTENSION);

// START: Plugin listview
$_PLUGIN = 'Listview';
$pluginSignature = str_replace('_', '', $_EXTENSION) . '_' . strtolower($_PLUGIN);


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $_VENDOR . '.' . $_EXTENSIONNAME,
    $_PLUGIN,
    'my plugin title'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,select_key,pages,recursive';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignature,
    'FILE:EXT:' . $_EXTENSION . '/Configuration/FlexForms/' . $pluginSignature . '.xml'
);
// END: Plugin listview
