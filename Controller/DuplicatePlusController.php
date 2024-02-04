<?php

namespace Kanboard\Plugin\DuplicatePlus\Controller;




class DuplicatePlusController extends \Kanboard\Controller\PluginController
{
    /**
     * Show one of the settings pages of the DuplicatePlus plugin.
     *
     * @return HTML response
     */
    public function showConfig()
    {
        // !!!!!
        // When I want to add new config options, I also have to add them
        // in the DuplicatePlusHelper.php in the getConfig() Method !
        // !!!!!
        $this->response->html($this->helper->layout->config('DuplicatePlus:config/duplicateplus_config', $this->helper->duplicatePlusHelper->getConfig()));
    }

    /**
     * Save the setting for DuplicatePlus.
     */
    public function saveConfig()
    {
        $form = $this->request->getValues();

        $values = $this->helper->duplicatePlusHelper->setConfig($form);

        $this->languageModel->loadCurrentLanguage();

        if ($this->configModel->save($values)) {
            $this->flash->success(t('Settings saved successfully.'));
        } else {
            $this->flash->failure(t('Unable to save your settings.'));
        }

        return $this->response->redirect($this->helper->url->to('DuplicatePlusController', 'showConfig', ['plugin' => 'DuplicatePlus']), true);
    }
}