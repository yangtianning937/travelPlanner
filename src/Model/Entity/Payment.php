<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property string $payment_type
 * @property string $payment_account
 * @property \Cake\I18n\FrozenTime $payment_date
 * @property string $payment_amount
 *
 * @property \App\Model\Entity\Customer $customer
 */
class Payment extends Entity
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
        'payment_type' => true,
        'payment_account' => true,
        'payment_date' => true,
        'payment_amount' => true,
        'customer' => true,
    ];
}
