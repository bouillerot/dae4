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
            <?= $this->Html->link(__('Edit State Machine Item State Log'), ['action' => 'edit', $stateMachineItemStateLog->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete State Machine Item State Log'), ['action' => 'delete', $stateMachineItemStateLog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stateMachineItemStateLog->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List State Machine Item State Logs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New State Machine Item State Log'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stateMachineItemStateLogs view content">
            <h3><?= h($stateMachineItemStateLog->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($stateMachineItemStateLog->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('State Machine Item State Id') ?></th>
                    <td><?= $this->Number->format($stateMachineItemStateLog->state_machine_item_state_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Identifier') ?></th>
                    <td><?= $this->Number->format($stateMachineItemStateLog->identifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($stateMachineItemStateLog->created) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
