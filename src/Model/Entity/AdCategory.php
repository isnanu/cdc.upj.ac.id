<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AdCategory Entity.
 */
class AdCategory extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'ads' => true,
    ];
}
