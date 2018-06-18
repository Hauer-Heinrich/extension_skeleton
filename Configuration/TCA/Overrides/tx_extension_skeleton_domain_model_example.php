<?php
defined('TYPO3_MODE') || die();

$_EXTENSION = "extension_skeleton";

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
   $_EXTENSION,
   'tx_extension_skeleton_domain_model_example' // Table name
);
