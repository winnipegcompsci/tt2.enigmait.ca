<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WtcrProduct Entity.
 */
class WtcrProduct extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'wtcr_vendor_id' => true,
        'wtcr_vendor_sku' => true,
        'mfg_part_num' => true,
        'wtcrsku' => true,
        'wtcr_product_name' => true,
        'description' => true,
        'autoupdate' => true,
        'wtcr_vendor_price' => true,
        'suggestedmarkup' => true,
        'wtcrprice' => true,
        'wtcr_nid' => true,
        'lastupdated' => true,
        'marketplace_data' => true,
        'pictures' => true,
        'wtcr_vendor' => true,
        'wtcr_product_category' => true,
    ];
}
