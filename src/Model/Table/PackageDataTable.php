<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PackageData Model
 *
 * @property \App\Model\Table\PackagesTable&\Cake\ORM\Association\HasMany $Packages
 *
 * @method \App\Model\Entity\PackageData newEmptyEntity()
 * @method \App\Model\Entity\PackageData newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\PackageData[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PackageData get($primaryKey, $options = [])
 * @method \App\Model\Entity\PackageData findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\PackageData patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PackageData[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PackageData|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PackageData saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PackageData[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PackageData[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\PackageData[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PackageData[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PackageDataTable extends Table
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

        $this->setTable('package_data');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Packages', [
            'foreignKey' => 'package_data_id',
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
            ->scalar('hotel_name')
            ->maxLength('hotel_name', 64)
            ->requirePresence('hotel_name', 'create')
            ->notEmptyString('hotel_name');

        $validator
            ->scalar('hotel_address')
            ->maxLength('hotel_address', 64)
            ->requirePresence('hotel_address', 'create')
            ->notEmptyString('hotel_address');

        $validator
            ->decimal('total_price')
            ->requirePresence('total_price', 'create')
            ->notEmptyString('total_price')
            ->add('total_price', 'nonNegative',[ 'rule' => ['comparison', '>=', 0], 'message' => 'Price must be non-negative' ]);

        return $validator;
    }
}
