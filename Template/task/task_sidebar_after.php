<?php

$html = '<i class="fa fa-trash fa-fw js-modal-small" aria-hidden="true"></i>' . t('Duplicate (instant)');
$href = $this->helper->url->href(
    'DuplicateModController',
    'duplicateInstant',
    ['plugin' => 'DuplicateMod', 'task_id' => $task['id']]
);
$a_element = '<a href="' . $href . '" class="js-modal-small" id="duplicateModDuplicateInstant" data-addUrl="' . $href . '">' . $html . '</a>';

?>

<?php if ($task['is_active'] == 1): ?>
<li>
    <?php echo $a_element; ?>
</li>
<?php endif ?>
