<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'crawler_devbox_sitepackage';

    /**
     * Default TypoScript for CrawlerDevboxSitepackage
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Crawler Devbox Sitepackage'
    );
});
