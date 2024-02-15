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
            // 'headerdate_enabled' => $this->configModel->get('weekhelper_headerdate_enabled', 1),
            // 'week_pattern' => $this->configModel->get('weekhelper_week_pattern', '{YEAR_SHORT}W{WEEK}'),
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
            // 'weekhelper_headerdate_enabled' => isset($form['headerdate_enabled']) ? 1 : 0,
            // 'weekhelper_week_pattern' => $form['week_pattern'],
        ];
    }
}
