<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StateMachineItemState $stateMachineItemState
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit State Machine Item State'), ['action' => 'edit', $stateMachineItemState->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete State Machine Item State'), ['action' => 'delete', $stateMachineItemState->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stateMachineItemState->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List State Machine Item States'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New State Machine Item State'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stateMachineItemStates view content">
            <h3><?= h($stateMachineItemState->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('State Machine Process') ?></th>
                    <td><?= $stateMachineItemState->has('state_machine_process') ? $this->Html->link($stateMachineItemState->state_machine_process->name, ['controller' => 'StateMachineProcesses', 'action' => 'view', $stateMachineItemState->state_machine_process->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($stateMachineItemState->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($stateMachineItemState->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($stateMachineItemState->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related State Machine Item State Logs') ?></h4>
                <?php if (!empty($stateMachineItemState->state_machine_item_state_logs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('State Machine Item State Id') ?></th>
                            <th><?= __('Identifier') ?></th>
                            <th><?= __('Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($stateMachineItemState->state_machine_item_state_logs as $stateMachineItemStateLogs) : ?>
                        <tr>
                            <td><?= h($stateMachineItemStateLogs->id) ?></td>
                            <td><?= h($stateMachineItemStateLogs->state_machine_item_state_id) ?></td>
                            <td><?= h($stateMachineItemStateLogs->identifier) ?></td>
                            <td><?= h($stateMachineItemStateLogs->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'StateMachineItemStateLogs', 'action' => 'view', $stateMachineItemStateLogs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'StateMachineItemStateLogs', 'action' => 'edit', $stateMachineItemStateLogs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'StateMachineItemStateLogs', 'action' => 'delete', $stateMachineItemStateLogs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stateMachineItemStateLogs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related State Machine Timeouts') ?></h4>
                <?php if (!empty($stateMachineItemState->state_machine_timeouts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('State Machine Item State Id') ?></th>
                            <th><?= __('State Machine Process Id') ?></th>
                            <th><?= __('Identifier') ?></th>
                            <th><?= __('Event') ?></th>
                            <th><?= __('Timeout') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($stateMachineItemState->state_machine_timeouts as $stateMachineTimeouts) : ?>
                        <tr>
                            <td><?= h($stateMachineTimeouts->id) ?></td>
                            <td><?= h($stateMachineTimeouts->state_machine_item_state_id) ?></td>
                            <td><?= h($stateMachineTimeouts->state_machine_process_id) ?></td>
                            <td><?= h($stateMachineTimeouts->identifier) ?></td>
                            <td><?= h($stateMachineTimeouts->event) ?></td>
                            <td><?= h($stateMachineTimeouts->timeout) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'StateMachineTimeouts', 'action' => 'view', $stateMachineTimeouts->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'StateMachineTimeouts', 'action' => 'edit', $stateMachineTimeouts->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'StateMachineTimeouts', 'action' => 'delete', $stateMachineTimeouts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stateMachineTimeouts->id)]) ?>
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
