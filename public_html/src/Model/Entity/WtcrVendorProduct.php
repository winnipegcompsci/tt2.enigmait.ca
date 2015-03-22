<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WtcrVendorProduct Entity.
 */
class WtcrVendorProduct extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'wtcr_vendor_id' => true,
        'vendor_sku' => true,
        'wtcr_sku' => true,
        'vendor_price' => true,
        'wtcr_category_id' => true,
        'last_updated' => true,
        'wtcr_vendor' => true,
        'wtcr_category' => true,
    ];
}
