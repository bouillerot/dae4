<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StateMachineItemStates Model
 *
 * @property \Cake\ORM\Table&\Cake\ORM\Association\BelongsTo $StateMachineProcesses
 * @property \Cake\ORM\Table&\Cake\ORM\Association\HasMany $StateMachineItemStateLogs
 * @property \Cake\ORM\Table&\Cake\ORM\Association\HasMany $StateMachineTimeouts
 * @method \App\Model\Entity\StateMachineItemState newEmptyEntity()
 * @method \App\Model\Entity\StateMachineItemState newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\StateMachineItemState[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StateMachineItemState get($primaryKey, $options = [])
 * @method \App\Model\Entity\StateMachineItemState findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\StateMachineItemState patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StateMachineItemState[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\StateMachineItemState|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StateMachineItemState saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StateMachineItemState[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StateMachineItemState[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\StateMachineItemState[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StateMachineItemState[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class StateMachineItemStatesTable extends Table
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

        $this->setTable('state_machine_item_states');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('StateMachineProcesses', [
            'foreignKey' => 'state_machine_process_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('StateMachineItemStateLogs', [
            'foreignKey' => 'state_machine_item_state_id',
        ]);
        $this->hasMany('StateMachineTimeouts', [
            'foreignKey' => 'state_machine_item_state_id',
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
            ->integer('state_machine_process_id')
            ->requirePresence('state_machine_process_id', 'create')
            ->notEmptyString('state_machine_process_id');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->allowEmptyString('description');

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
            $rules->isUnique(
                ['name', 'state_machine_process_id']
            ),
            ['errorField' => 'name']
        );
        $rules->add(
            $rules->existsIn('state_machine_process_id', 'StateMachineProcesses'),
            ['errorField' => 'state_machine_process_id']
        );

        return $rules;
    }
}
