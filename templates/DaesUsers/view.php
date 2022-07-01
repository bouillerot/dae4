<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DaesUser $daesUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Daes User'), ['action' => 'edit', $daesUser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Daes User'), ['action' => 'delete', $daesUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $daesUser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Daes Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Daes User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="daesUsers view content">
            <h3><?= h($daesUser->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $daesUser->has('user') ? $this->Html->link($daesUser->user->id, ['controller' => 'Users', 'action' => 'view', $daesUser->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Dae') ?></th>
                    <td><?= $daesUser->has('dae') ? $this->Html->link($daesUser->dae->poste, ['controller' => 'Daes', 'action' => 'view', $daesUser->dae->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($daesUser->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
