<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    $extensionKey = 'myextension';

    /**
     * Default TypoScript
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Some descriptive title'
    );
});