<?php

namespace Kanboard\Plugin\DuplicateMod\Helper;

use Kanboard\Core\Base;


class DuplicateModHelper extends Base
{
    /**
     * Get configuration for plugin as array.
     *
     * @return array
     */
    public function getConfig()
    {
        return [
            'title' => t('DuplicateMod') . ' &gt; ' . t('Settings'),

            // values
            'prefix' => $this->configModel->get('duplicatemod_prefix', ''),
            'weekadd_enabled' => $this->configModel->get('duplicatemod_weekadd_enabled', 1),
        ];
    }

    /**
     * Generate the config values from the given form.
     *
     * @param array $form
     * @return array
     */
    public function generateConfig($form)
    {
        return [
            'duplicatemod_prefix' => $form['prefix'],
            'duplicatemod_weekadd_enabled' => isset($form['weekadd_enabled']) ? 1 : 0,
        ];
    }
}
