<?php
namespace App\Model\Table;

use App\Model\Entity\AdCategory;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AdCategories Model
 *
 * @property \Cake\ORM\Association\HasMany $Ads
 */
class AdCategoriesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('ad_categories');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->hasMany('Ads', [
            'foreignKey' => 'ad_category_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }

    public function isOwnedBy($adCategoryId, $userId)
    {
        return $this->exists(['id' => $adCategoryId, 'user_id' => $userId]);
    }



}
