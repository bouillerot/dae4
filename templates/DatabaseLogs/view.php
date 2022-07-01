<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $databaseLog
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Database Log'), ['action' => 'edit', $databaseLog->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Database Log'), ['action' => 'delete', $databaseLog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $databaseLog->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Database Logs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Database Log'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="databaseLogs view content">
            <h3><?= h($databaseLog->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($databaseLog->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Summary') ?></th>
                    <td><?= h($databaseLog->summary) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip') ?></th>
                    <td><?= h($databaseLog->ip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hostname') ?></th>
                    <td><?= h($databaseLog->hostname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Refer') ?></th>
                    <td><?= h($databaseLog->refer) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Agent') ?></th>
                    <td><?= h($databaseLog->user_agent) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($databaseLog->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Count') ?></th>
                    <td><?= $this->Number->format($databaseLog->count) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($databaseLog->created) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Message') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($databaseLog->message)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Context') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($databaseLog->context)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Uri') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($databaseLog->uri)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
