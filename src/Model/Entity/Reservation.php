<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reservation Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property int|null $flight_id
 * @property int|null $hotel_id
 * @property int|null $service_id
 * @property int|null $package_id
 * @property string $reservation_type
 * @property string $trip_duration
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Flight $flight
 * @property \App\Model\Entity\Hotel $hotel
 * @property \App\Model\Entity\Service $service
 * @property \App\Model\Entity\Package $package
 * @property \App\Model\Entity\ReservationResult[] $reservation_results
 */
class Reservation extends Entity
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
        'flight_id' => true,
        'hotel_id' => true,
        'service_id' => true,
        'package_id' => true,
        'reservation_type' => true,
        'trip_duration' => true,
        'customer' => true,
        'flight' => true,
        'hotel' => true,
        'service' => true,
        'package' => true,
        'reservation_results' => true,
    ];
}
