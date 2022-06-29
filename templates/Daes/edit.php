<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dae $dae
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dae->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dae->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Daes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="daes form content">
            <?= $this->Form->create($dae) ?>
            <fieldset>
                <legend><?= __('Edit Dae') ?></legend>
                <?php
                    echo $this->Form->control('poste');
                    echo $this->Form->control('users._ids', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
