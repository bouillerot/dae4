<?php
declare(strict_types=1);

namespace App\Model\Table;

use App\Model\Entity\DaesUser; // pour les constantes
use App\Model\Entity\User; // pour les constantes
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


/**
 * Users Model
 *
 * @property \App\Model\Table\DaesTable&\Cake\ORM\Association\BelongsToMany $Daes
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 * @property \App\Model\Table\DaesUsersTable&\Cake\ORM\Association\HasMany $DaesUsers
 */
class UsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField(User::FIELD_ID);
        $this->setPrimaryKey(User::FIELD_ID);


        // link Users to Daes via join table DaesUsers
        $this->belongsToMany('Daes', [
            'foreignKey'       => DaesUser::FIELD_USER_ID,
            'targetForeignKey' => DaesUser::FIELD_DAE_ID,
            'joinTable'        => 'daes_users',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->email(User::FIELD_EMAIL)
            ->requirePresence(User::FIELD_EMAIL, 'create')
            ->notEmptyString(User::FIELD_EMAIL)
            ->add(User::FIELD_EMAIL, 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar(User::FIELD_PASSWORD)
            ->maxLength(User::FIELD_PASSWORD, 255)
            ->requirePresence(User::FIELD_PASSWORD, 'create')
            ->notEmptyString(User::FIELD_PASSWORD);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add(
            $rules->isUnique([User::FIELD_EMAIL]),
            ['errorField' => User::FIELD_EMAIL]
        );

        return $rules;
    }
}
