<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $stateMachineItemStateLog
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List State Machine Item State Logs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stateMachineItemStateLogs form content">
            <?= $this->Form->create($stateMachineItemStateLog) ?>
            <fieldset>
                <legend><?= __('Add State Machine Item State Log') ?></legend>
                <?php
                    echo $this->Form->control('state_machine_item_state_id');
                    echo $this->Form->control('identifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
