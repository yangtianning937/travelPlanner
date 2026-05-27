<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Enquiry Entity
 *
 * @property int $id
 * @property string $customer_name
 * @property int $customer_phoneno
 * @property string $customer_email
 * @property string $customer_topic
 * @property string $message
 */
class Enquiry extends Entity
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
        'customer_name' => true,
        'customer_email' => true,
        'customer_topic' => true,
        'message' => true,
    ];
}
