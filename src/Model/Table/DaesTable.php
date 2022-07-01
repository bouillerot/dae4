<?php
declare(strict_types=1);

namespace App\Model\Table;

use App\Model\Entity\Dae; // pour les Constantes
use App\Model\Entity\DaesUser; // pour les Constantes
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Daes Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsToMany $Users
 * @method \App\Model\Entity\Dae newEmptyEntity()
 * @method \App\Model\Entity\Dae newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Dae[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dae get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dae findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Dae patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dae[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dae|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dae saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dae[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dae[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dae[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dae[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 * @property \App\Model\Table\DaesUsersTable&\Cake\ORM\Association\HasMany $DaesUsers
 * @property \StateMachine\Model\Table\StateMachineItemsTable&\Cake\ORM\Association\HasOne $ItemStates
 */
class DaesTable extends Table
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

        $this->setTable('daes');
        $this->setDisplayField(Dae::FIELD_POSTE);
        $this->setPrimaryKey(Dae::FIELD_ID);

        // $this->addBehavior('Timestamp');

        // link Daes to Users via join table DaesUsers
        $this->belongsToMany('Users', [
            'foreignKey' => DaesUser::FIELD_DAE_ID,
            'targetForeignKey' => DaesUser::FIELD_USER_ID,
            'joinTable' => 'daes_users',
        ]);
        // Linking state machine to Dae Entity
        $this->hasOne('ItemStates', [
            'className' => 'StateMachine.StateMachineItems',
            'foreignKey' => 'identifier',
            // 'conditions' => ['ItemStates.state_machine' => 'Daesem'],
            'conditions' => ['ItemStates.state_machine' => 'Daesem'],
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
            ->scalar(Dae::FIELD_POSTE)
            ->maxLength(Dae::FIELD_POSTE, 255)
            ->requirePresence(Dae::FIELD_POSTE, 'create')
            ->notEmptyString(Dae::FIELD_POSTE);

        return $validator;
    }
}
