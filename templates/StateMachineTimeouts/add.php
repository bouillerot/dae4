<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $stateMachineTimeout
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List State Machine Timeouts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stateMachineTimeouts form content">
            <?= $this->Form->create($stateMachineTimeout) ?>
            <fieldset>
                <legend><?= __('Add State Machine Timeout') ?></legend>
                <?php
                    echo $this->Form->control('state_machine_item_state_id');
                    echo $this->Form->control('state_machine_process_id');
                    echo $this->Form->control('identifier');
                    echo $this->Form->control('event');
                    echo $this->Form->control('timeout');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
