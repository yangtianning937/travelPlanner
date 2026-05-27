<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property string $customer_fname
 * @property string $customer_lname
 * @property string $customer_addr
 * @property string $password
 * @property string $email
 *
 * @property \App\Model\Entity\CustomerPreference[] $customer_preferences
 * @property \App\Model\Entity\Payment[] $payments
 * @property \App\Model\Entity\Reservation[] $reservations
 */
class Customer extends Entity
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
        'customer_fname' => true,
        'customer_lname' => true,
        'customer_addr' => true,
        'password' => true,
        'email' => true,
        'customer_preferences' => true,
        'payments' => true,
        'reservations' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];
}
