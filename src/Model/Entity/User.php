<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Authentication\PasswordHasher\DefaultPasswordHasher;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $password
 * @property string $email
 * @property string|null $nonce
 * @property \Cake\I18n\FrozenTime $nonce_expiry

 */
class User extends Entity
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
        'email' => true,
        'password' => true,
        'first_name' => true,
        'last_name' => true,
        'created' => false,
        'modified' => false,
        'nonce' => true,
        'expiry' => true,
    ];


    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];

    /**
     * Generate display field for User entity
     * @return string Display field
     */
    protected function _getUserFullDisplay(): string {
        return $this->first_name . ' ' . $this->last_name . ' (' . $this->email . ')';
    }

    /**
     * Hashing password for User entity
     * @param string $password Password field
     * @return string|null hashed password
     */
    protected function _setPassword(string $password): ?string {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
        return $password;
    }

}
