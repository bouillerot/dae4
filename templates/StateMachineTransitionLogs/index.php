<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $stateMachineTransitionLogs
 */
?>
<div class="stateMachineTransitionLogs index content">
    <?= $this->Html->link(__('New State Machine Transition Log'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('State Machine Transition Logs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('state_machine_process_id') ?></th>
                    <th><?= $this->Paginator->sort('state_machine_item_id') ?></th>
                    <th><?= $this->Paginator->sort('identifier') ?></th>
                    <th><?= $this->Paginator->sort('locked') ?></th>
                    <th><?= $this->Paginator->sort('event') ?></th>
                    <th><?= $this->Paginator->sort('params') ?></th>
                    <th><?= $this->Paginator->sort('source_state') ?></th>
                    <th><?= $this->Paginator->sort('target_state') ?></th>
                    <th><?= $this->Paginator->sort('command') ?></th>
                    <th><?= $this->Paginator->sort('condition') ?></th>
                    <th><?= $this->Paginator->sort('is_error') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stateMachineTransitionLogs as $stateMachineTransitionLog): ?>
                <tr>
                    <td><?= $this->Number->format($stateMachineTransitionLog->id) ?></td>
                    <td><?= $this->Number->format($stateMachineTransitionLog->state_machine_process_id) ?></td>
                    <td><?= $this->Number->format($stateMachineTransitionLog->state_machine_item_id) ?></td>
                    <td><?= $this->Number->format($stateMachineTransitionLog->identifier) ?></td>
                    <td><?= h($stateMachineTransitionLog->locked) ?></td>
                    <td><?= h($stateMachineTransitionLog->event) ?></td>
                    <td><?= h($stateMachineTransitionLog->params) ?></td>
                    <td><?= h($stateMachineTransitionLog->source_state) ?></td>
                    <td><?= h($stateMachineTransitionLog->target_state) ?></td>
                    <td><?= h($stateMachineTransitionLog->command) ?></td>
                    <td><?= h($stateMachineTransitionLog->condition) ?></td>
                    <td><?= h($stateMachineTransitionLog->is_error) ?></td>
                    <td><?= h($stateMachineTransitionLog->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $stateMachineTransitionLog->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stateMachineTransitionLog->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stateMachineTransitionLog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stateMachineTransitionLog->id)]) ?>
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
