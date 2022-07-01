<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $stateMachineTransitionLog
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit State Machine Transition Log'), ['action' => 'edit', $stateMachineTransitionLog->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete State Machine Transition Log'), ['action' => 'delete', $stateMachineTransitionLog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stateMachineTransitionLog->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List State Machine Transition Logs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New State Machine Transition Log'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stateMachineTransitionLogs view content">
            <h3><?= h($stateMachineTransitionLog->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Event') ?></th>
                    <td><?= h($stateMachineTransitionLog->event) ?></td>
                </tr>
                <tr>
                    <th><?= __('Params') ?></th>
                    <td><?= h($stateMachineTransitionLog->params) ?></td>
                </tr>
                <tr>
                    <th><?= __('Source State') ?></th>
                    <td><?= h($stateMachineTransitionLog->source_state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Target State') ?></th>
                    <td><?= h($stateMachineTransitionLog->target_state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Command') ?></th>
                    <td><?= h($stateMachineTransitionLog->command) ?></td>
                </tr>
                <tr>
                    <th><?= __('Condition') ?></th>
                    <td><?= h($stateMachineTransitionLog->condition) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($stateMachineTransitionLog->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('State Machine Process Id') ?></th>
                    <td><?= $this->Number->format($stateMachineTransitionLog->state_machine_process_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('State Machine Item Id') ?></th>
                    <td><?= $this->Number->format($stateMachineTransitionLog->state_machine_item_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Identifier') ?></th>
                    <td><?= $this->Number->format($stateMachineTransitionLog->identifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($stateMachineTransitionLog->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Locked') ?></th>
                    <td><?= $stateMachineTransitionLog->locked ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Error') ?></th>
                    <td><?= $stateMachineTransitionLog->is_error ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Error Message') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($stateMachineTransitionLog->error_message)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
