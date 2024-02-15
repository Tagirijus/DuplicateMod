<?php

namespace Kanboard\Plugin\DuplicateMod\Controller;


/**
 * Task Duplication controller
 *
 */
class DuplicateModController extends \Kanboard\Controller\PluginController
{
    /**
     * Show one of the settings pages of the DuplicateMod plugin.
     *
     * @return HTML response
     */
    public function showConfig()
    {
        // !!!!!
        // When I want to add new config options, I also have to add them
        // in the WeekHelperHelper.php in the getConfig() Method !
        // !!!!!
        $this->response->html($this->helper->layout->config('DuplicateMod:config/duplicatemod_config', $this->helper->duplicateModHelper->getConfig()));
    }

    /**
     * Save the setting for DuplicateMod.
     */
    public function saveConfig()
    {
        $form = $this->request->getValues();

        $values = $this->helper->duplicateModHelper->generateConfig($form);

        $this->languageModel->loadCurrentLanguage();

        if ($this->configModel->save($values)) {
            $this->flash->success(t('Settings saved successfully.'));
        } else {
            $this->flash->failure(t('Unable to save your settings.'));
        }

        return $this->response->redirect($this->helper->url->to('DuplicateModController', 'showConfig', ['plugin' => 'DuplicateMod']), true);
    }

    /**
     * Duplicate a task without asking first
     *
     * @access public
     */
    public function duplicateInstant()
    {
        $task = $this->getTask();

        $task_id = $this->taskDuplicationModel->duplicate($task['id']);

        if ($task_id > 0) {
            $this->flash->success(t('Task created successfully.'));
            return $this->response->redirect($this->helper->url->to('TaskViewController', 'show', array('task_id' => $task_id)));
        } else {
            $this->flash->failure(t('Unable to create this task.'));
            return $this->response->html($this->template->render('task_duplication/duplicate', array(
                'task' => $task,
            )));
        }
    }
}
