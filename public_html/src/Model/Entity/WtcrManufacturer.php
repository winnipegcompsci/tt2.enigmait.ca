<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WtcrManufacturer Entity.
 */
class WtcrManufacturer extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'inventory' => true,
    ];
}
