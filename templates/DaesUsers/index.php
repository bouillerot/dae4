<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DaesUser[]|\Cake\Collection\CollectionInterface $daesUsers
 */
?>
<div class="daesUsers index content">
    <?= $this->Html->link(__('New Daes User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Daes Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('dae_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($daesUsers as $daesUser): ?>
                <tr>
                    <td><?= $this->Number->format($daesUser->id) ?></td>
                    <td><?= $daesUser->has('user') ? $this->Html->link($daesUser->user->id, ['controller' => 'Users', 'action' => 'view', $daesUser->user->id]) : '' ?></td>
                    <td><?= $daesUser->has('dae') ? $this->Html->link($daesUser->dae->poste, ['controller' => 'Daes', 'action' => 'view', $daesUser->dae->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $daesUser->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $daesUser->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $daesUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $daesUser->id)]) ?>
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
