<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $stateMachineTransitionLog
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List State Machine Transition Logs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stateMachineTransitionLogs form content">
            <?= $this->Form->create($stateMachineTransitionLog) ?>
            <fieldset>
                <legend><?= __('Add State Machine Transition Log') ?></legend>
                <?php
                    echo $this->Form->control('state_machine_process_id');
                    echo $this->Form->control('state_machine_item_id');
                    echo $this->Form->control('identifier');
                    echo $this->Form->control('locked');
                    echo $this->Form->control('event');
                    echo $this->Form->control('params');
                    echo $this->Form->control('source_state');
                    echo $this->Form->control('target_state');
                    echo $this->Form->control('command');
                    echo $this->Form->control('condition');
                    echo $this->Form->control('is_error');
                    echo $this->Form->control('error_message');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
