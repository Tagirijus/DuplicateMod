<?php

namespace Kanboard\Plugin\DuplicateMod\Controller;


/**
 * Task Duplication controller
 *
 */
class DuplicateModController extends \Kanboard\Controller\PluginController
{
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
