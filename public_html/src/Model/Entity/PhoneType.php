<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PhoneType Entity.
 */
class PhoneType extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'order' => true,
        'phone_numbers' => true,
    ];
}
