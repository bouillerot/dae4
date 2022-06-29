<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Authentication\PasswordHasher\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $created_by
 * @property int $modified_by
 *
 * @property \App\Model\Entity\Dae[] $daes
 */
class User extends Entity
{
    public const FIELD_ID = 'id';
    public const FIELD_EMAIL = 'email';
    public const FIELD_PASSWORD = 'password';
    public const FIELD_CREATED = 'created';
    public const FIELD_MODIFIED = 'modified';
    public const FIELD_CREATED_BY = 'created_by';
    public const FIELD_MODIFIED_BY = 'modified_by';
    public const FIELD_DAES = 'daes';

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
        self::FIELD_EMAIL => true,
        self::FIELD_PASSWORD => true,
        self::FIELD_CREATED => true,
        self::FIELD_MODIFIED => true,
        self::FIELD_CREATED_BY => true,
        self::FIELD_MODIFIED_BY => true,
        self::FIELD_DAES => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        self::FIELD_PASSWORD,
    ];

    /**
     * {@inheritDoc]
     *
     * @param string $password -
     * @return string|null
     */
    protected function _setPassword(string $password): ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}
