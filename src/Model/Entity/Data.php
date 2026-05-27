<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Data Entity
 *
 * @property int $id
 * @property string $departure
 * @property string $destination
 * @property int $flight_price
 * @property \Cake\I18n\FrozenTime $departure_time
 * @property \Cake\I18n\FrozenTime $destination_time
 * @property string $hotel_name
 * @property string $hotel_price
 * @property string $hotel_address
 *
 * @property \App\Model\Entity\Flight[] $flights
 * @property \App\Model\Entity\Hotel[] $hotels
 */
class Data extends Entity
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
        'flight_price' => true,
        'departure_time' => true,
        'destination_time' => true,
        'hotel_name' => true,
        'hotel_price' => true,
        'hotel_address' => true,
        'flights' => true,
        'hotels' => true,
    ];
}
