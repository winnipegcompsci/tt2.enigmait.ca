<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'username' => true,
        'password' => true,
        'secretkey' => true,
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'role' => true,
        'disabled' => true,
        'user_created' => true,
        'session' => true,
        'cookie' => true,
        'ip' => true,
        'last_login' => true,
        'customer_id' => true,
        'company_name' => true,
        'customer' => true,
        'customer_notes' => true,
        'events' => true,
        'tickets' => true,
        'tickets_history' => true,
    ];
}
