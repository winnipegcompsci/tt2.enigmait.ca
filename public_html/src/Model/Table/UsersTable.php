<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('users');
        $this->displayField('u_user_id');
        $this->primaryKey('u_user_id');
        $this->belongsTo('UUsers', [
            'foreignKey' => 'u_user_id'
        ]);
        $this->belongsTo('UCustomers', [
            'foreignKey' => 'u_customer_id'
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
            ->add('u_user_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('u_user_id', 'create')
            ->requirePresence('u_user_name', 'create')
            ->notEmpty('u_user_name')
            ->requirePresence('u_password', 'create')
            ->notEmpty('u_password')
            ->requirePresence('u_secretkey', 'create')
            ->notEmpty('u_secretkey')
            ->requirePresence('u_first_name', 'create')
            ->notEmpty('u_first_name')
            ->requirePresence('u_last_name', 'create')
            ->notEmpty('u_last_name')
            ->requirePresence('u_email', 'create')
            ->notEmpty('u_email')
            ->add('u_user_class', 'valid', ['rule' => 'numeric'])
            ->requirePresence('u_user_class', 'create')
            ->notEmpty('u_user_class')
            ->requirePresence('u_disabled', 'create')
            ->notEmpty('u_disabled')
            ->add('u_created', 'valid', ['rule' => 'datetime'])
            ->requirePresence('u_created', 'create')
            ->notEmpty('u_created')
            ->requirePresence('u_session', 'create')
            ->notEmpty('u_session')
            ->requirePresence('u_cookie', 'create')
            ->notEmpty('u_cookie')
            ->requirePresence('u_ip', 'create')
            ->notEmpty('u_ip')
            ->add('u_last_login', 'valid', ['rule' => 'datetime'])
            ->requirePresence('u_last_login', 'create')
            ->notEmpty('u_last_login')
            ->add('u_customer_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('u_customer_id', 'create')
            ->notEmpty('u_customer_id')
            ->requirePresence('u_company_name', 'create')
            ->notEmpty('u_company_name');

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
        $rules->add($rules->existsIn(['u_user_id'], 'UUsers'));
        $rules->add($rules->existsIn(['u_customer_id'], 'UCustomers'));
        return $rules;
    }
}
