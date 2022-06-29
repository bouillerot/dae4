<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dae[]|\Cake\Collection\CollectionInterface $daes
 */
?>
<div class="daes index content">
    <?= $this->Html->link(__('New Dae'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Daes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('poste') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($daes as $dae): ?>
                <tr>
                    <td><?= $this->Number->format($dae->id) ?></td>
                    <td><?= h($dae->created) ?></td>
                    <td><?= h($dae->modified) ?></td>
                    <td><?= h($dae->poste) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $dae->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dae->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dae->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dae->id)]) ?>
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
