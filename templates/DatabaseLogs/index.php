<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $databaseLogs
 */
?>
<div class="databaseLogs index content">
    <?= $this->Html->link(__('New Database Log'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Database Logs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('summary') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('ip') ?></th>
                    <th><?= $this->Paginator->sort('hostname') ?></th>
                    <th><?= $this->Paginator->sort('refer') ?></th>
                    <th><?= $this->Paginator->sort('user_agent') ?></th>
                    <th><?= $this->Paginator->sort('count') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($databaseLogs as $databaseLog): ?>
                <tr>
                    <td><?= $this->Number->format($databaseLog->id) ?></td>
                    <td><?= h($databaseLog->type) ?></td>
                    <td><?= h($databaseLog->summary) ?></td>
                    <td><?= h($databaseLog->created) ?></td>
                    <td><?= h($databaseLog->ip) ?></td>
                    <td><?= h($databaseLog->hostname) ?></td>
                    <td><?= h($databaseLog->refer) ?></td>
                    <td><?= h($databaseLog->user_agent) ?></td>
                    <td><?= $this->Number->format($databaseLog->count) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $databaseLog->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $databaseLog->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $databaseLog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $databaseLog->id)]) ?>
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
