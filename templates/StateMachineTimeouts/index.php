<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $stateMachineTimeouts
 */
?>
<div class="stateMachineTimeouts index content">
    <?= $this->Html->link(__('New State Machine Timeout'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('State Machine Timeouts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('state_machine_item_state_id') ?></th>
                    <th><?= $this->Paginator->sort('state_machine_process_id') ?></th>
                    <th><?= $this->Paginator->sort('identifier') ?></th>
                    <th><?= $this->Paginator->sort('event') ?></th>
                    <th><?= $this->Paginator->sort('timeout') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stateMachineTimeouts as $stateMachineTimeout): ?>
                <tr>
                    <td><?= $this->Number->format($stateMachineTimeout->id) ?></td>
                    <td><?= $this->Number->format($stateMachineTimeout->state_machine_item_state_id) ?></td>
                    <td><?= $this->Number->format($stateMachineTimeout->state_machine_process_id) ?></td>
                    <td><?= $this->Number->format($stateMachineTimeout->identifier) ?></td>
                    <td><?= h($stateMachineTimeout->event) ?></td>
                    <td><?= h($stateMachineTimeout->timeout) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $stateMachineTimeout->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stateMachineTimeout->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stateMachineTimeout->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stateMachineTimeout->id)]) ?>
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
