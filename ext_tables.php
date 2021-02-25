<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(function() {

    $extension = "extension_skeleton";

    // Automatically include TypoScript "setup.typoscript" and "constants.typoscript"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extension, 'Configuration/TypoScript', 'TS Title Custom');

    // Add translations for table in BE
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
        'tx_extensionskeleton_domain_model_example', // Table name
        'EXT:' . $extension . '/Resources/Private/Language/locallang_csh_tx_extension_skeleton_domain_model_example.xlf'
    );

    // Allow table modify on BE List-Module
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
        'tx_extensionskeleton_domain_model_example' // Table name
    );
});
