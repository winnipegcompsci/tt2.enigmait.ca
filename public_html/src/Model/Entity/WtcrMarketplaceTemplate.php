<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WtcrMarketplaceTemplate Entity.
 */
class WtcrMarketplaceTemplate extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'wtcr_marketplace_id' => true,
        'template_data' => true,
        'marketplace' => true,
    ];
}
