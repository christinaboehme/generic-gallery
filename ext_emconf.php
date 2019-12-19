<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "genericgallery"
 *
 * Auto generated by Extension Builder 2014-09-14
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Generic Gallery',
    'description' => 'One gallery to rule them all. Extbase & Fluid driven for use with any gallery / slide / rotate plugin.',
    'category' => 'plugin',
    'author' => 'Felix Nagel',
    'author_email' => 'info@felixnagel.com',
    'state' => 'stable',
    'uploadfolder' => '1',
    'clearCacheOnLoad' => 1,
    'version' => '3.0.1-dev',
    'constraints' => [
        'depends' => [
            'php' => '7.0.0-7.2.99',
            'typo3' => '9.4.0-9.5.99',
        ],
        'suggests' => [
            'filemetadata' => '',
            'metadata' => '',
            'extractor' => '',
        ],
    ],
];
