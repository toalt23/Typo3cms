<?php

defined('TYPO3') or die();

$EM_CONF[$_EXTKEY] = [
    'title' => 'My own Extension',
    'description' => 'Typo3 Playground',
    'category' => 'template',
    'author' => 'Tobias Alt',
    'author_email' => 'to.alt@web.de',
    'author_company' => 'some company',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];