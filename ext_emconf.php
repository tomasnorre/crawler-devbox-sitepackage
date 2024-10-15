<?php

/**
 * Extension Manager/Repository config file for ext "crawler_devbox_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Crawler Devbox Sitepackage',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-13.99.99',
            'fluid_styled_content' => '11.5.0-13.99.99',
            'rte_ckeditor' => '11.5.0-13.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Tnm\\CrawlerDevboxSitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Tomas Norre Mikkelsen',
    'author_email' => 'tomasnorre@gmail.com',
    'author_company' => 'TNM',
    'version' => '0.0.3',
];
