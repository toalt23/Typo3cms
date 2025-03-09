<?php

declare (strict_types=1);

defined('TYPO3') or die();

use Tobias\MyExtension\Controller\DemoController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

ExtensionUtility::configurePlugin(
    'myextension',
    'DemoPlugin',
    [DemoController::class => 'show'],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT,
);