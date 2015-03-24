<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WtcrSalesVehicleTemplate Entity.
 */
class WtcrSalesVehicleTemplate extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'wtcr_sales_vehicle_id' => true,
        'name' => true,
        'template_data' => true,
        'wtcr_sales_vehicles' => true,
    ];
}
