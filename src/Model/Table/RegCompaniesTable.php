<?php
namespace App\Model\Table;

use App\Model\Entity\RegCompany;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RegCompanies Model
 *
 */
class RegCompaniesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->hasOne('Companies',[
            'user_id' => 'id',
            'name'=>'name',
            'address'=>'address',
            'phone'=>'phone',
            'fax'=>'fax',
            'email'=>'email',
            'web'=>'web',
            'industry'=>'industry',
            'logo'=>'logo',
            'cp_name'=>'cp_name',
            'cp_position'=>'cp_position',
            'cp_phone'=>'cp_phone',
            'cp_email'=>'cp_email']);

        $this->hasOne('Users',[
            'username'=>'username',
            'password'=>'password']);
        $this->table('reg_companies');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
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
            ->allowEmpty('name');
            
        $validator
            ->requirePresence('address', 'create')
            ->allowEmpty('address');
            
        $validator
            ->requirePresence('phone', 'create')
            ->allowEmpty('phone');
            
        $validator
            ->requirePresence('fax', 'create')
            ->allowEmpty('fax');
            
        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->allowEmpty('email');
            
        $validator
            ->requirePresence('web', 'create')
            ->allowEmpty('web');
            
        $validator
            ->requirePresence('industry', 'create')
            ->allowEmpty('industry');
            
        $validator
            ->requirePresence('logo', 'create')
            ->allowEmpty('logo');
            
        $validator
            ->requirePresence('cp_name', 'create')
            ->allowEmpty('cp_name');
            
        $validator
            ->requirePresence('cp_position', 'create')
            ->allowEmpty('cp_position');
            
        $validator
            ->requirePresence('cp_phone', 'create')
            ->allowEmpty('cp_phone');
            
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
        return $rules;
    }
}
