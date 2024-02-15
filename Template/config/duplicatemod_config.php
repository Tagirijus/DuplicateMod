<div class="page-header">
    <h2><?= t('DuplicateMod configuration') ?></h2>
</div>
<form method="post" action="<?= $this->url->href('DuplicateModController', 'saveConfig', ['plugin' => 'DuplicateMod']) ?>" autocomplete="off">
    <?= $this->form->csrf() ?>

    <br>

    <div class="task-form-container">

        <div class="task-form-main-column">
            <?= $this->form->label(t('Prefix for duplicated task (leave empty for none).'), 'prefix') ?>
            <?= $this->form->text('prefix', ['prefix' => $prefix], [], [
                '',
                '',
                'placeholder="' . t('[DUPLICATE]') . '"'
            ]) ?>
        </div>

    </div>

    <br>
    <br>

    <div class="task-form-container">

        <div class="task-form-main-column">
            <?= $this->form->label(t('[Need WeekHelper plugin!!] Add one week to the week pattern in the tasktitle.'), 'weekadd_enabled') ?>
            <?= $this->form->checkbox('weekadd_enabled', t('enabled'), 1, $weekadd_enabled) ?>
        </div>

    </div>


    <div class="task-form-bottom">
        <?= $this->modal->submitButtons() ?>
    </div>

</form>
