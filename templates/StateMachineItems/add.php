<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $stateMachineItem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List State Machine Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stateMachineItems form content">
            <?= $this->Form->create($stateMachineItem) ?>
            <fieldset>
                <legend><?= __('Add State Machine Item') ?></legend>
                <?php
                    echo $this->Form->control('identifier');
                    echo $this->Form->control('state_machine');
                    echo $this->Form->control('process');
                    echo $this->Form->control('state');
                    echo $this->Form->control('state_machine_transition_log_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
