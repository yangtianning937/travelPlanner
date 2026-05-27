<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Flight Entity
 *
 * @property int $id
 * @property string $leaveFrom
 * @property string $goingTo
 * @property \Cake\I18n\FrozenTime $flight_departure_time
 * @property int $flight_data_id
 *
 * @property \App\Model\Entity\FlightData $flight_data
 * @property \App\Model\Entity\Reservation[] $reservations
 */
class Flight extends Entity
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
        'leaveFrom' => true,
        'goingTo' => true,
        'flight_departure_time' => true,
        'flight_data_id' => true,
        'flight_data' => true,
        'reservations' => true,
    ];
}
