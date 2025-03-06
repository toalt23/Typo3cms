<?php


call_user_func(function () {

    $extensionKey = 'myextension';

    /**
     * Default TypoScript
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/',
        'My Extension Template'
    );

});