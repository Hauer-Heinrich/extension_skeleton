<?php
defined('TYPO3_MODE') || die();

$extension = 'extension_skeleton';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
   $extension,
   'tx_extensionskeleton_domain_model_example' // Table name
);
