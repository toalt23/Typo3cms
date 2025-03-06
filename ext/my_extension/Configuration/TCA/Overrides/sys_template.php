<?php

defined('TYPO3') or die();

call_user_func(function () {

    $extensionKey = 'myExtension';

    /**
     * Default TypoScript
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Some template'
    );

});