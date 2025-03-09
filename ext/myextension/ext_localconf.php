<?php

declare (strict_types=1);

defined('TYPO3') or die();

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

ExtensionUtility::configurePlugin(
    'myextension',
    'DemoPlugin',
    [DemoController::class => 'show']
);