<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Data Model
 *
 * @method \App\Model\Entity\Data newEmptyEntity()
 * @method \App\Model\Entity\Data newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Data[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Data get($primaryKey, $options = [])
 * @method \App\Model\Entity\Data findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Data patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Data[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Data|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Data saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Data[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Data[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Data[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Data[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DataTable extends Table
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

        $this->setTable('data');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('flight_price')
            ->requirePresence('flight_price', 'create')
            ->notEmptyString('flight_price');

        $validator
            ->dateTime('departure_time')
            ->requirePresence('departure_time', 'create')
            ->notEmptyDateTime('departure_time');

        $validator
            ->dateTime('destination_time')
            ->requirePresence('destination_time', 'create')
            ->notEmptyDateTime('destination_time');

        $validator
            ->scalar('hotel_name')
            ->maxLength('hotel_name', 64)
            ->requirePresence('hotel_name', 'create')
            ->notEmptyString('hotel_name');

        $validator
            ->decimal('hotel_price')
            ->requirePresence('hotel_price', 'create')
            ->notEmptyString('hotel_price');

        $validator
            ->scalar('hotel_address')
            ->maxLength('hotel_address', 64)
            ->requirePresence('hotel_address', 'create')
            ->notEmptyString('hotel_address');

        return $validator;
    }
}
