<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ad Entity.
 */
class Ad extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'ad_category_id' => true,
        'study_program' => true,
        'image' => true,
        'position' => true,
        'salary_min' => true,
        'salary_max' => true,
        'description' => true,
        'user' => true,
        'ad_category' => true,
    ];
}
