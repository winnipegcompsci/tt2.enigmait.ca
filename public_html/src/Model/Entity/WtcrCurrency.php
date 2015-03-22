<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WtcrCurrency Entity.
 */
class WtcrCurrency extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'wtcr_currency_provider_id' => true,
        'abbreviation' => true,
        'wtcr_currency_provider' => true,
    ];
}
