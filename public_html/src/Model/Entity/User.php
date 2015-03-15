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
        'u_user_name' => true,
        'u_password' => true,
        'u_secretkey' => true,
        'u_first_name' => true,
        'u_last_name' => true,
        'u_email' => true,
        'u_user_class' => true,
        'u_disabled' => true,
        'u_created' => true,
        'u_session' => true,
        'u_cookie' => true,
        'u_ip' => true,
        'u_last_login' => true,
        'u_customer_id' => true,
        'u_company_name' => true,
        'u_user' => true,
        'u_customer' => true,
    ];
}
