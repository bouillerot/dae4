<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DaesUser Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $dae_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Dae $dae
 */
class DaesUser extends Entity
{
    public const FIELD_ID = 'id';
    public const FIELD_USER_ID = 'user_id';
    public const FIELD_DAE_ID = 'dae_id';
    public const FIELD_USER = 'user';
    public const FIELD_DAE = 'dae';
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
        self::FIELD_ID => true,
        self::FIELD_USER_ID => true,
        self::FIELD_DAE_ID => true,
        self::FIELD_USER => true,
        self::FIELD_DAE => true,
    ];
}
