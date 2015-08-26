<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Alumnus Entity.
 */
class Alumnus extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'name' => true,
        'study_program' => true,
        'nim' => true,
        'graduated' => true,
        'ipk' => true,
        'foto' => true,
        'place_of_birth' => true,
        'date_of_birth' => true,
        'sex' => true,
        'citizen' => true,
        'religion' => true,
        'civil_status' => true,
        'address' => true,
        'phone' => true,
        'email' => true,
        'user' => true,
    ];
}
