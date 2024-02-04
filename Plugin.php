<?php

namespace Kanboard\Plugin\DuplicatePlus;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;


class Plugin extends Base
{
    public function initialize()
    {
        // Helper
        $this->helper->register('duplicatePlusHelper', '\Kanboard\Plugin\DuplicatePlus\Helper\DuplicatePlusHelper');

        // Views - Template Hook
        $this->template->hook->attach(
            'template:config:sidebar', 'DuplicatePlus:config/duplicateplus_config_sidebar');

        // Extra Page - Routes
        $this->route->addRoute('/duplicateplus/config', 'DuplicatePlusController', 'showConfig', 'DuplicatePlus');
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        return 'DuplicatePlus';
    }

    public function getPluginDescription()
    {
        return t('An extended task duplication feature');
    }

    public function getPluginAuthor()
    {
        return 'Tagirijus';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getCompatibleVersion()
    {
        // Examples:
        // >=1.0.37
        // <1.0.37
        // <=1.0.37
        return '>=1.2.27';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/Tagirijus/DuplicatePlus';
    }
}
