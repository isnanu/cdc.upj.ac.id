<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RegCompany Entity.
 */
class RegCompany extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'approval' => true,
        'username' => true,
        'password' => true,
        'address' => true,
        'phone' => true,
        'fax' => true,
        'email' => true,
        'web' => true,
        'industry' => true,
        'logo' => true,
        'company_size' => true,
        'cp_name' => true,
        'cp_position' => true,
        'cp_phone' => true,
        'cp_email' => true,
    ];
}
