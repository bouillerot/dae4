<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $stateMachineLock
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit State Machine Lock'), ['action' => 'edit', $stateMachineLock->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete State Machine Lock'), ['action' => 'delete', $stateMachineLock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stateMachineLock->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List State Machine Locks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New State Machine Lock'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stateMachineLocks view content">
            <h3><?= h($stateMachineLock->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Identifier') ?></th>
                    <td><?= h($stateMachineLock->identifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($stateMachineLock->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Expires') ?></th>
                    <td><?= h($stateMachineLock->expires) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($stateMachineLock->created) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
