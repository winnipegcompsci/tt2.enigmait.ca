<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WtcrCurrencyProviderRate Entity.
 */
class WtcrCurrencyProviderRate extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'wtcr_currencies_id' => true,
        'wtcr_currency_provider_id' => true,
        'rate' => true,
        'timestamp' => true,
        'wtcr_currency' => true,
        'wtcr_currency_provider' => true,
    ];
}
