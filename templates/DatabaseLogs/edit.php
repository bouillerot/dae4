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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $databaseLog->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $databaseLog->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Database Logs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="databaseLogs form content">
            <?= $this->Form->create($databaseLog) ?>
            <fieldset>
                <legend><?= __('Edit Database Log') ?></legend>
                <?php
                    echo $this->Form->control('type');
                    echo $this->Form->control('summary');
                    echo $this->Form->control('message');
                    echo $this->Form->control('context');
                    echo $this->Form->control('ip');
                    echo $this->Form->control('hostname');
                    echo $this->Form->control('uri');
                    echo $this->Form->control('refer');
                    echo $this->Form->control('user_agent');
                    echo $this->Form->control('count');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
