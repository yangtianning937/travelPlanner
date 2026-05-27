<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ReservationResults Model
 *
 * @property \App\Model\Table\ReservationsTable&\Cake\ORM\Association\BelongsTo $Reservations
 *
 * @method \App\Model\Entity\ReservationResult newEmptyEntity()
 * @method \App\Model\Entity\ReservationResult newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ReservationResult[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ReservationResult get($primaryKey, $options = [])
 * @method \App\Model\Entity\ReservationResult findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ReservationResult patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ReservationResult[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ReservationResult|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ReservationResult saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ReservationResult[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ReservationResult[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ReservationResult[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ReservationResult[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ReservationResultsTable extends Table
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

        $this->setTable('reservation_results');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Reservations', [
            'foreignKey' => 'reservation_id',
            'joinType' => 'INNER',
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
            ->integer('reservation_id')
            ->notEmptyString('reservation_id');

        $validator
            ->scalar('result_desc')
            ->maxLength('result_desc', 256)
            ->requirePresence('result_desc', 'create')
            ->notEmptyString('result_desc');

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
        $rules->add($rules->existsIn('reservation_id', 'Reservations'), ['errorField' => 'reservation_id']);

        return $rules;
    }
}
