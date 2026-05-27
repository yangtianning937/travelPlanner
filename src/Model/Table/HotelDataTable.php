<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HotelData Model
 *
 * @property \App\Model\Table\HotelsTable&\Cake\ORM\Association\HasMany $Hotels
 *
 * @method \App\Model\Entity\HotelData newEmptyEntity()
 * @method \App\Model\Entity\HotelData newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\HotelData[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HotelData get($primaryKey, $options = [])
 * @method \App\Model\Entity\HotelData findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\HotelData patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HotelData[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\HotelData|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HotelData saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HotelData[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\HotelData[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\HotelData[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\HotelData[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class HotelDataTable extends Table
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

        $this->setTable('hotel_data');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Hotels', [
            'foreignKey' => 'hotel_data_id',
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

        return $validator;
    }
}
