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
            <?= $this->Html->link(__('Edit State Machine Process'), ['action' => 'edit', $stateMachineProcess->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete State Machine Process'), ['action' => 'delete', $stateMachineProcess->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stateMachineProcess->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List State Machine Processes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New State Machine Process'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stateMachineProcesses view content">
            <h3><?= h($stateMachineProcess->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($stateMachineProcess->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('State Machine') ?></th>
                    <td><?= h($stateMachineProcess->state_machine) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($stateMachineProcess->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($stateMachineProcess->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($stateMachineProcess->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
