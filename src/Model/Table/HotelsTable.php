<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hotels Model
 *
 * @property \App\Model\Table\HotelDataTable&\Cake\ORM\Association\BelongsTo $HotelData
 * @property \App\Model\Table\ReservationsTable&\Cake\ORM\Association\HasMany $Reservations
 *
 * @method \App\Model\Entity\Hotel newEmptyEntity()
 * @method \App\Model\Entity\Hotel newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Hotel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hotel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hotel findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Hotel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hotel[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hotel|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hotel saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hotel[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Hotel[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Hotel[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Hotel[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class HotelsTable extends Table
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

        $this->setTable('hotels');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('HotelData', [
            'foreignKey' => 'hotel_data_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Reservations', [
            'foreignKey' => 'hotel_id',
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

        $validator
            ->scalar('hotel_city')
            ->maxLength('hotel_city', 64)
            ->requirePresence('hotel_city', 'create')
            ->notEmptyString('hotel_city');

        $validator
            ->scalar('hotel_country')
            ->maxLength('hotel_country', 64)
            ->requirePresence('hotel_country', 'create')
            ->notEmptyString('hotel_country');

        $validator
            ->integer('hotel_data_id')
            ->notEmptyString('hotel_data_id');

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
        $rules->add($rules->existsIn('hotel_data_id', 'HotelData'), ['errorField' => 'hotel_data_id']);

        return $rules;
    }
}
