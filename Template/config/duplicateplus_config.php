<div class="page-header">
    <h2><?= t('WeekHelper weeks configuration') ?></h2>
</div>
<form method="post" action="<?= $this->url->href('WeekHelperController', 'saveConfigWeeks', ['plugin' => 'WeekHelper']) ?>" autocomplete="off">
    <?= $this->form->csrf() ?>


    <!-- Title -->

    <br>

    <div class="task-form-container">

        <!-- WEITER HIER: Configs planen; also somit auch, was das Plugin nachher machen kann / machen soll -->
        <div class="task-form-main-column">
            <?= $this->form->label(t('Date in the header'), 'headerdate_enabled') ?>
            <?= $this->form->checkbox('headerdate_enabled', t('enabled'), 1, $headerdate_enabled) ?>
        </div>

    </div>

    <br>
    <br>


    <!-- Comment -->
    <!-- Subtask -->
    <!-- Task details -->
    <!-- Move to column -->





    <div class="task-form-bottom">
        <?= $this->modal->submitButtons() ?>
    </div>

</form>
