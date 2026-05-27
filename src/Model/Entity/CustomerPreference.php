<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CustomerPreference Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property \Cake\I18n\FrozenTime $customer_preferred_departure_date
 * @property \Cake\I18n\FrozenTime $customer_preferred_return_date
 * @property string $customer_preferred_season
 * @property string $customer_preferred_region
 *
 * @property \App\Model\Entity\Customer $customer
 */
class CustomerPreference extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'customer_id' => true,
        'customer_preferred_departure_date' => true,
        'customer_preferred_return_date' => true,
        'customer_preferred_season' => true,
        'customer_preferred_region' => true,
        'customer' => true,
    ];
}
