<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WtcrCategory Entity.
 */
class WtcrCategory extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'default_markup' => true,
        'inventory' => true,
    ];
}
