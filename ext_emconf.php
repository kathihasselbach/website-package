<?php

/**
 * Extension Manager/Repository config file for ext "website_package".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Website-Package',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'fluid_styled_content' => '8.7.0-8.7.99',
            'rte_ckeditor' => '8.7.0-8.7.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'KatharinaHasselbach\\WebsitePackage\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Katharina Hasselbach',
    'author_email' => 'kathihasselbach88@gmail.com',
    'author_company' => 'Katharina Hasselbach',
    'version' => '1.0.0',
];
