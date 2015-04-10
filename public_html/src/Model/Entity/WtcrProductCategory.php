<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WtcrProductCategory Entity.
 */
class WtcrProductCategory extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'category_name' => true,
        'default_markup' => true,
        'wtcr_products' => true,
        'wtcr_vendor_products' => true,
    ];
}
