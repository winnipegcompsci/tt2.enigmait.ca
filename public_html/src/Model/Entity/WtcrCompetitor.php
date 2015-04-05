<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WtcrCompetitor Entity.
 */
class WtcrCompetitor extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'competitor_name' => true,
        'update_frequency_hours' => true,
        'wtcr_competitor_products' => true,
    ];
}
