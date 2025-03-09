<?php

declare (strict_types=1);

defined('TYPO3') or die();

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

ExtensionUtility::configurePlugin(
    'myextension',
    'Demo Plugin',
    [\Tobias\MyExtension\Classes\Controller\DemoController::class => 'show'],
);