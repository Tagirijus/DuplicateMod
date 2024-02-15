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

    <!-- <br>
    <br>

    <div class="task-form-container">

        <div class="task-form-main-column">
            <?= $this->form->label(t('Sticky time box at the bottom'), 'time_box_enabled') ?>
            <?= $this->form->checkbox('time_box_enabled', t('enabled'), 1, $time_box_enabled, '', [
                'autofocus',
                'tabindex="3"'
            ]) ?>
        </div>

    </div> -->


    <div class="task-form-bottom">
        <?= $this->modal->submitButtons() ?>
    </div>

</form>
