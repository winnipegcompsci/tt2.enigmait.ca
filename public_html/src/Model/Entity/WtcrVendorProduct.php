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
        'product_name' => true,
        'wtcr_vendor_id' => true,
        'wtcr_vendor_sku' => true,
        'mfg_part_num' => true,
        'vendor_price' => true,
        'wtcr_category_id' => true,
        'last_updated' => true,
        'wtcr_vendor' => true,
        'wtcr_category' => true,
    ];
}
