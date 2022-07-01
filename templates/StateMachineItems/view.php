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
            <?= $this->Html->link(__('Edit State Machine Item'), ['action' => 'edit', $stateMachineItem->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete State Machine Item'), ['action' => 'delete', $stateMachineItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stateMachineItem->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List State Machine Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New State Machine Item'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stateMachineItems view content">
            <h3><?= h($stateMachineItem->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('State Machine') ?></th>
                    <td><?= h($stateMachineItem->state_machine) ?></td>
                </tr>
                <tr>
                    <th><?= __('Process') ?></th>
                    <td><?= h($stateMachineItem->process) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($stateMachineItem->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($stateMachineItem->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Identifier') ?></th>
                    <td><?= $this->Number->format($stateMachineItem->identifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('State Machine Transition Log Id') ?></th>
                    <td><?= $stateMachineItem->state_machine_transition_log_id === null ? '' : $this->Number->format($stateMachineItem->state_machine_transition_log_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
