<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Flights Model
 *
 * @property \App\Model\Table\FlightDataTable&\Cake\ORM\Association\BelongsTo $FlightData
 * @property \App\Model\Table\ReservationsTable&\Cake\ORM\Association\HasMany $Reservations
 *
 * @method \App\Model\Entity\Flight newEmptyEntity()
 * @method \App\Model\Entity\Flight newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Flight[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Flight get($primaryKey, $options = [])
 * @method \App\Model\Entity\Flight findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Flight patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Flight[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Flight|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Flight saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Flight[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Flight[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Flight[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Flight[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FlightsTable extends Table
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

        $this->setTable('flights');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('FlightData', [
            'foreignKey' => 'flight_data_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Packages', [
            'foreignKey' => 'flight_id',
        ]);
        $this->hasMany('Reservations', [
            'foreignKey' => 'flight_id',
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
            ->scalar('leaveFrom')
            ->maxLength('leaveFrom', 64)
            ->requirePresence('leaveFrom', 'create')
            ->notEmptyString('leaveFrom');

        $validator
            ->scalar('goingTo')
            ->maxLength('goingTo', 64)
            ->requirePresence('goingTo', 'create')
            ->notEmptyString('goingTo');

        $validator
            ->dateTime('flight_departure_time')
            ->requirePresence('flight_departure_time', 'create')
            ->notEmptyDateTime('flight_departure_time');

        $validator
            ->integer('flight_data_id')
            ->notEmptyString('flight_data_id');

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
        $rules->add($rules->existsIn('flight_data_id', 'FlightData'), ['errorField' => 'flight_data_id']);

        return $rules;
    }
}
