<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WtcrCurrencyProvider Entity.
 */
class WtcrCurrencyProvider extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'currency_provider_name' => true,
        'wtcr_currencies_id' => true,
        'update_freq' => true,
        'wtcr_currencies' => true,
        'wtcr_currency_provider_rates' => true,
    ];
}
