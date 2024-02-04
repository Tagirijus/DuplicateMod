<?php

namespace Kanboard\Plugin\DuplicatePlus\Helper;

use Kanboard\Core\Base;


class DuplicatePlusHelper extends Base
{
    /**
     * Get configuration for plugin as array.
     *
     * @return array
     */
    public function getConfig()
    {
        return [
            'title' => t('DuplicatePlus') . ' &gt; ' . t('Settings'),

            // config datas
            // 'duplicateplus_BOOL_enabled' => $this->configModel->get('duplicateplus_BOOL_enabled', 1),
            // 'duplicateplus_STRING' => $this->configModel->get('duplicateplus_STRING', ''),
        ];
    }

    /**
     * Generate $value for the config saving in the controller.
     *
     * @param array $form
     * @return array
     */
    public function setConfig($form)
    {
        return [
            // 'duplicateplus_BOOL_enabled' => isset($form['BOOL_enabled']) ? 1 : 0,
            // 'duplicateplus_STRING' => $form['STRING'],
        ];
    }
}
