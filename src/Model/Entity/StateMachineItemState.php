<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StateMachineItemState Entity
 *
 * @property int $id
 * @property int $state_machine_process_id
 * @property string $name
 * @property string|null $description
 *
 * @property \Cake\ORM\Entity $state_machine_process
 * @property \Cake\ORM\Entity[] $state_machine_item_state_logs
 * @property \Cake\ORM\Entity[] $state_machine_timeouts
 */
class StateMachineItemState extends Entity
{
    public const FIELD_ID = 'id';
    public const FIELD_STATE_MACHINE_PROCESS_ID = 'state_machine_process_id';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_STATE_MACHINE_PROCESS = 'state_machine_process';
    public const FIELD_STATE_MACHINE_ITEM_STATE_LOGS = 'state_machine_item_state_logs';
    public const FIELD_STATE_MACHINE_TIMEOUTS = 'state_machine_timeouts';
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        self::FIELD_STATE_MACHINE_PROCESS_ID => true,
        self::FIELD_NAME => true,
        self::FIELD_DESCRIPTION => true,
        self::FIELD_STATE_MACHINE_PROCESS => true,
        self::FIELD_STATE_MACHINE_ITEM_STATE_LOGS => true,
        self::FIELD_STATE_MACHINE_TIMEOUTS => true,
    ];
}
