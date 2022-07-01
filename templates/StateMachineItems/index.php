<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $stateMachineItems
 */
?>
<div class="stateMachineItems index content">
    <?= $this->Html->link(__('New State Machine Item'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('State Machine Items') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('identifier') ?></th>
                    <th><?= $this->Paginator->sort('state_machine') ?></th>
                    <th><?= $this->Paginator->sort('process') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('state_machine_transition_log_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stateMachineItems as $stateMachineItem): ?>
                <tr>
                    <td><?= $this->Number->format($stateMachineItem->id) ?></td>
                    <td><?= $this->Number->format($stateMachineItem->identifier) ?></td>
                    <td><?= h($stateMachineItem->state_machine) ?></td>
                    <td><?= h($stateMachineItem->process) ?></td>
                    <td><?= h($stateMachineItem->state) ?></td>
                    <td><?= $stateMachineItem->state_machine_transition_log_id === null ? '' : $this->Number->format($stateMachineItem->state_machine_transition_log_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $stateMachineItem->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stateMachineItem->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stateMachineItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stateMachineItem->id)]) ?>
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
