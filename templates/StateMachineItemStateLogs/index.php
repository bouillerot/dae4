<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $stateMachineItemStateLogs
 */
?>
<div class="stateMachineItemStateLogs index content">
    <?= $this->Html->link(__('New State Machine Item State Log'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('State Machine Item State Logs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('state_machine_item_state_id') ?></th>
                    <th><?= $this->Paginator->sort('identifier') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stateMachineItemStateLogs as $stateMachineItemStateLog): ?>
                <tr>
                    <td><?= $this->Number->format($stateMachineItemStateLog->id) ?></td>
                    <td><?= $this->Number->format($stateMachineItemStateLog->state_machine_item_state_id) ?></td>
                    <td><?= $this->Number->format($stateMachineItemStateLog->identifier) ?></td>
                    <td><?= h($stateMachineItemStateLog->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $stateMachineItemStateLog->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stateMachineItemStateLog->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stateMachineItemStateLog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stateMachineItemStateLog->id)]) ?>
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
