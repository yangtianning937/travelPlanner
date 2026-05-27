<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FlightData Model
 *
 * @property \App\Model\Table\FlightsTable&\Cake\ORM\Association\HasMany $Flights
 *
 * @method \App\Model\Entity\FlightData newEmptyEntity()
 * @method \App\Model\Entity\FlightData newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\FlightData[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FlightData get($primaryKey, $options = [])
 * @method \App\Model\Entity\FlightData findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\FlightData patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FlightData[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\FlightData|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FlightData saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FlightData[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FlightData[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\FlightData[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FlightData[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FlightDataTable extends Table
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

        $this->setTable('flight_data');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Flights', [
            'foreignKey' => 'flight_data_id',
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
            ->scalar('departure')
            ->maxLength('departure', 64)
            ->requirePresence('departure', 'create')
            ->notEmptyString('departure');

        $validator
            ->scalar('destination')
            ->maxLength('destination', 64)
            ->requirePresence('destination', 'create')
            ->notEmptyString('destination');

        $validator
            ->dateTime('departure_time')
            ->requirePresence('departure_time', 'create')
            ->notEmptyDateTime('departure_time');

        $validator
            ->dateTime('destination_time')
            ->requirePresence('destination_time', 'create')
            ->notEmptyDateTime('destination_time');

        $validator
            ->decimal('flight_price')
            ->requirePresence('flight_price', 'create')
            ->notEmptyString('flight_price')
            ->add('flight_price', 'nonNegative',[ 'rule' => ['comparison', '>=', 0], 'message' => 'Price must be non-negative' ]);

        return $validator;
    }
}
