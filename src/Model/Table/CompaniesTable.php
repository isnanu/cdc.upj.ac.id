<?php
namespace App\Model\Table;

use App\Model\Entity\Company;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Companies Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 */
class CompaniesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('companies');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
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
            
        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');
            
        $validator
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');
            
        $validator
            ->requirePresence('fax', 'create')
            ->notEmpty('fax');
            
        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email');
            
        $validator
            ->requirePresence('web', 'create')
            ->notEmpty('web');
            
        $validator
            ->requirePresence('industry', 'create')
            ->notEmpty('industry');
            
        $validator
            ->requirePresence('logo', 'create')
            ->notEmpty('logo');
            
        $validator
            ->requirePresence('cp_name', 'create')
            ->notEmpty('cp_name');
            
        $validator
            ->requirePresence('cp_position', 'create')
            ->notEmpty('cp_position');
            
        $validator
            ->requirePresence('cp_phone', 'create')
            ->notEmpty('cp_phone');
            
        $validator
            ->requirePresence('cp_email', 'create')
            ->notEmpty('cp_email');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }
}
