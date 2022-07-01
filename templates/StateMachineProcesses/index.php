<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $stateMachineProcesses
 */
?>
<div class="stateMachineProcesses index content">
    <?= $this->Html->link(__('New State Machine Process'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('State Machine Processes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('state_machine') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stateMachineProcesses as $stateMachineProcess): ?>
                <tr>
                    <td><?= $this->Number->format($stateMachineProcess->id) ?></td>
                    <td><?= h($stateMachineProcess->name) ?></td>
                    <td><?= h($stateMachineProcess->state_machine) ?></td>
                    <td><?= h($stateMachineProcess->created) ?></td>
                    <td><?= h($stateMachineProcess->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $stateMachineProcess->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stateMachineProcess->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stateMachineProcess->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stateMachineProcess->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
