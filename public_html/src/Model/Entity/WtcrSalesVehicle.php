<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WtcrSalesVehicle Entity.
 */
class WtcrSalesVehicle extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'wtcr_sales_vehicle_template_id' => true,
        'wtcr_sales_vehicle_templates' => true,
    ];
}
