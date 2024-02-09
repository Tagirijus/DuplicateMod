<?php

namespace Kanboard\Plugin\DuplicateMod;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;


class Plugin extends Base
{
    public function initialize()
    {
        // Views - Template Hook
        $this->template->hook->attach(
            'template:task:dropdown:after-duplicate-task', 'DuplicateMod:task/dropdown_addition_before');
        $this->template->hook->attach(
            'template:task:sidebar:actions', 'DuplicateMod:task/task_sidebar_after');
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        return 'DuplicateMod';
    }

    public function getPluginDescription()
    {
        return t('Modificatin of the task duplication controller of Kanban');
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
        return 'https://github.com/Tagirijus/DuplicateMod';
    }
}
