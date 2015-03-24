<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CustomerNote Entity.
 */
class CustomerNote extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'customer_id' => true,
        'user_id' => true,
        'title' => true,
        'text' => true,
        'timestamp' => true,
        'permission' => true,
        'customer' => true,
        'user' => true,
    ];
}
