<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dae $dae
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Dae'), ['action' => 'edit', $dae->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dae'), ['action' => 'delete', $dae->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dae->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Daes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Dae'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="daes view content">
            <h3><?= h($dae->poste) ?></h3>
            <table>
                <tr>
                    <th><?= __('Poste') ?></th>
                    <td><?= h($dae->poste) ?></td>
                </tr>
                <tr>
                    <th><?= __('Item State') ?></th>
                    <td><?= $dae->has('item_state') ? $this->Html->link($dae->item_state->state, ['controller' => 'StateMachineItems', 'action' => 'view', $dae->item_state->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($dae->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($dae->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Password') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($dae->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
