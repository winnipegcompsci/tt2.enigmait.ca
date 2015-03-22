<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmailType Entity.
 */
class EmailType extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'order' => true,
        'emails' => true,
    ];
}
