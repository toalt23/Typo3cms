<?php

declare (strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

ExtensionUtility::configurePlugin(
    'myextension',
    'DemoPlugin',
    [\Tobias\MyExtension\Classes\Controller\DemoController::class => 'show']
);