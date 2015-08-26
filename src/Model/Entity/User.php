<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'username' => true,
        'password' => true,
        'role_id' => true,
        'role' => true,
        'ads' => true,
        'alumni' => true,
        'companies' => true,
    ];

     protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }
    
}
