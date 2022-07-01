<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $stateMachineProcess
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $stateMachineProcess->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $stateMachineProcess->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List State Machine Processes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stateMachineProcesses form content">
            <?= $this->Form->create($stateMachineProcess) ?>
            <fieldset>
                <legend><?= __('Edit State Machine Process') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('state_machine');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
