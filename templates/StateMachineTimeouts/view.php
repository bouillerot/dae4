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
            <?= $this->Html->link(__('Edit State Machine Timeout'), ['action' => 'edit', $stateMachineTimeout->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete State Machine Timeout'), ['action' => 'delete', $stateMachineTimeout->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stateMachineTimeout->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List State Machine Timeouts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New State Machine Timeout'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stateMachineTimeouts view content">
            <h3><?= h($stateMachineTimeout->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Event') ?></th>
                    <td><?= h($stateMachineTimeout->event) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($stateMachineTimeout->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('State Machine Item State Id') ?></th>
                    <td><?= $this->Number->format($stateMachineTimeout->state_machine_item_state_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('State Machine Process Id') ?></th>
                    <td><?= $this->Number->format($stateMachineTimeout->state_machine_process_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Identifier') ?></th>
                    <td><?= $this->Number->format($stateMachineTimeout->identifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Timeout') ?></th>
                    <td><?= h($stateMachineTimeout->timeout) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
