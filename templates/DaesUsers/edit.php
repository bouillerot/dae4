<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DaesUser $daesUser
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $daes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $daesUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $daesUser->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Daes Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="daesUsers form content">
            <?= $this->Form->create($daesUser) ?>
            <fieldset>
                <legend><?= __('Edit Daes User') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('dae_id', ['options' => $daes]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
