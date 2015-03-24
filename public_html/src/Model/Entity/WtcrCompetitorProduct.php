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
        'name' => true,
        'wtcr_competitor_id' => true,
        'competitor_sku' => true,
        'wtcr_sku' => true,
        'competitor_price' => true,
        'last_updated' => true,
        'url' => true,
        'wtcr_competitor' => true,
    ];
}
