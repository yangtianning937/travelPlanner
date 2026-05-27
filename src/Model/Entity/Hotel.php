<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hotel Entity
 *
 * @property int $id
 * @property string $hotel_name
 * @property string $hotel_price
 * @property string $hotel_address
 * @property string $hotel_city
 * @property string $hotel_country
 * @property int $hotel_data_id
 *
 * @property \App\Model\Entity\HotelData $hotel_data
 * @property \App\Model\Entity\Reservation[] $reservations
 */
class Hotel extends Entity
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
        'hotel_name' => true,
        'hotel_price' => true,
        'hotel_address' => true,
        'hotel_city' => true,
        'hotel_country' => true,
        'hotel_data_id' => true,
        'hotel_data' => true,
        'reservations' => true,
    ];
}
