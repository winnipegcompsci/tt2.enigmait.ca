<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WtcrCompetitorProduct Entity.
 */
class WtcrCompetitorProduct extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'competitor_product_name' => true,
        'wtcr_competitor_id' => true,
        'wtcr_competitor_sku' => true,
        'mfg_part_number' => true,
        'competitor_price' => true,
        'last_updated' => true,
        'competitor_url' => true,
        'wtcr_competitor' => true,
    ];
}
