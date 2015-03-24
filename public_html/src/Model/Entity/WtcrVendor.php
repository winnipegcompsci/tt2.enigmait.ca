<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WtcrVendor Entity.
 */
class WtcrVendor extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'update_freq_hours' => true,
        'inventory' => true,
        'wtcr_vendor_products' => true,
    ];
}
