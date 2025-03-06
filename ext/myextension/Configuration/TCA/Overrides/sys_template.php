<?php

call_user_func(function()
{
    $extensionKey = 'myextension';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Tobias Alt Extension'
    );
});