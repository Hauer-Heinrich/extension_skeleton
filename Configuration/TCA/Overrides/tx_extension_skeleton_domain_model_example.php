<?php
defined('TYPO3_MODE') || die();

$extension = "extension_skeleton";

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
   $extension,
   'tx_extension_skeleton_domain_model_example' // Table name
);
