<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StateMachineItemState $stateMachineItemState
 * @var string[]|\Cake\Collection\CollectionInterface $stateMachineProcesses
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $stateMachineItemState->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $stateMachineItemState->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List State Machine Item States'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stateMachineItemStates form content">
            <?= $this->Form->create($stateMachineItemState) ?>
            <fieldset>
                <legend><?= __('Edit State Machine Item State') ?></legend>
                <?php
                    echo $this->Form->control('state_machine_process_id', ['options' => $stateMachineProcesses]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
