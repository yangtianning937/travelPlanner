<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FlightData Entity
 *
 * @property int $id
 * @property string $departure
 * @property string $destination
 * @property \Cake\I18n\FrozenTime $departure_time
 * @property \Cake\I18n\FrozenTime $destination_time
 * @property string $flight_price
 *
 * @property \App\Model\Entity\Flight[] $flights
 * @property \App\Model\Entity\Package[] $packages
 */
class FlightData extends Entity
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
        'departure' => true,
        'destination' => true,
        'departure_time' => true,
        'destination_time' => true,
        'flight_price' => true,
        'flights' => true,
        'packages' => true,
    ];
}
