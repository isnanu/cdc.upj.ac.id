<?php
namespace App\Model\Table;

use App\Model\Entity\Alumnus;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alumni Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 */
class AlumniTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('alumni');
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
            ->requirePresence('study_program', 'create')
            ->notEmpty('study_program');
            
        $validator
            ->requirePresence('nim', 'create')
            ->notEmpty('nim');
            
        $validator
            ->add('graduated', 'valid', ['rule' => 'date'])
            ->requirePresence('graduated', 'create')
            ->notEmpty('graduated');
            
        $validator
            ->requirePresence('ipk', 'create')
            ->notEmpty('ipk');
            
        $validator
            ->requirePresence('foto', 'create')
            ->notEmpty('foto');
            
        $validator
            ->requirePresence('place_of_birth', 'create')
            ->notEmpty('place_of_birth');
            
        $validator
            ->add('date_of_birth', 'valid', ['rule' => 'date'])
            ->requirePresence('date_of_birth', 'create')
            ->notEmpty('date_of_birth');
            
        $validator
            ->requirePresence('sex', 'create')
            ->notEmpty('sex');
            
        $validator
            ->requirePresence('citizen', 'create')
            ->notEmpty('citizen');
            
        $validator
            ->requirePresence('religion', 'create')
            ->notEmpty('religion');
            
        $validator
            ->requirePresence('civil_status', 'create')
            ->notEmpty('civil_status');
            
        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');
            
        $validator
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');
            
        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email');

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
