<?php

defined('TYPO3') or die();

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

ExtensionUtility::configurePlugin(
    'myextension',
    'DemoPlugin',
    [\Tobias\MyExtension\Classes\Controller\DemoController::class => 'show']
);