<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WtcrProductMap Entity.
 */
class WtcrProductMap extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'wtcr_vendor_id' => true,
        'mfg_part_num' => true,
        'wtcrsku' => true,
        'description' => true,
        'wtcr_vendor_sku' => true,
        'supplierstock' => true,
        'autoupdate' => true,
        'suggestedprice' => true,
        'suggestedmarkup' => true,
        'wtcrprice' => true,
        'wtcr_nid' => true,
        'lastupdated' => true,
        'wtcr_vendor' => true,
        'wtcr_product_category' => true,
    ];
}
