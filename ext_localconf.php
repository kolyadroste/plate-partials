<?php
defined('TYPO3') || die ('Access denied.');
call_user_func(function() {
    $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'] .= ',webp';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        'plate_partials',
        'setup',
        "@import 'EXT:plate_partials/Configuration/TypoScript/setup.typoscript'");
});
