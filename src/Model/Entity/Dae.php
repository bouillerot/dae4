<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dae Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $poste
 *
 * @property \App\Model\Entity\User[] $users
 * @property \StateMachine\Model\Entity\StateMachineItem|null $item_state
 */
class Dae extends Entity
{
    public const FIELD_ID = 'id';
    public const FIELD_CREATED = 'created';
    public const FIELD_MODIFIED = 'modified';
    public const FIELD_POSTE = 'poste';
    public const FIELD_USERS = 'users';
    public const FIELD_ITEM_STATE = 'item_state';
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
        self::FIELD_CREATED => true,
        self::FIELD_MODIFIED => true,
        self::FIELD_POSTE => true,
        self::FIELD_USERS => true,
        self::FIELD_ITEM_STATE => true,
    ];
}
