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
        'user_id' => true,
        'user_name' => true,
        'user_password' => true,
        'user_secretkey' => true,
        'user_first_name' => true,
        'user_last_name' => true,
        'user_email' => true,
        'user_class' => true,
        'user_disabled' => true,
        'user_created' => true,
        'user_session' => true,
        'user_cookie' => true,
        'user_ip' => true,
        'user_last_login' => true,
        'user_customer_id' => true,
        'user_company_name' => true,
        'u_user' => true,
        'u_customer' => true,
    ];
}
