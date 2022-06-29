<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StateMachineItemState[]|\Cake\Collection\CollectionInterface $stateMachineItemStates
 */
?>
<div class="stateMachineItemStates index content">
    <?= $this->Html->link(__('New State Machine Item State'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('State Machine Item States') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('state_machine_process_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stateMachineItemStates as $stateMachineItemState): ?>
                <tr>
                    <td><?= $this->Number->format($stateMachineItemState->id) ?></td>
                    <td><?= $stateMachineItemState->has('state_machine_process') ? $this->Html->link($stateMachineItemState->state_machine_process->name, ['controller' => 'StateMachineProcesses', 'action' => 'view', $stateMachineItemState->state_machine_process->id]) : '' ?></td>
                    <td><?= h($stateMachineItemState->name) ?></td>
                    <td><?= h($stateMachineItemState->description) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $stateMachineItemState->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stateMachineItemState->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stateMachineItemState->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stateMachineItemState->id)]) ?>
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
