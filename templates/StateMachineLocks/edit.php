<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $stateMachineLock
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $stateMachineLock->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $stateMachineLock->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List State Machine Locks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stateMachineLocks form content">
            <?= $this->Form->create($stateMachineLock) ?>
            <fieldset>
                <legend><?= __('Edit State Machine Lock') ?></legend>
                <?php
                    echo $this->Form->control('identifier');
                    echo $this->Form->control('expires');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
