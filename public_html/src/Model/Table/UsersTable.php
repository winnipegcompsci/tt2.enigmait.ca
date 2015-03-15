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
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('UserCustomers', [
            'foreignKey' => 'user_customer_id'
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
            ->add('user_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('user_id', 'create')
            ->requirePresence('user_name', 'create')
            ->notEmpty('user_name')
            ->requirePresence('user_password', 'create')
            ->notEmpty('user_password')
            ->requirePresence('user_secretkey', 'create')
            ->notEmpty('user_secretkey')
            ->requirePresence('user_first_name', 'create')
            ->notEmpty('user_first_name')
            ->requirePresence('user_last_name', 'create')
            ->notEmpty('user_last_name')
            ->requirePresence('user_email', 'create')
            ->notEmpty('user_email')
            ->add('user_class', 'valid', ['rule' => 'numeric'])
            ->requirePresence('user_class', 'create')
            ->notEmpty('user_class')
            ->requirePresence('user_disabled', 'create')
            ->notEmpty('user_disabled')
            ->add('user_created', 'valid', ['rule' => 'datetime'])
            ->requirePresence('user_created', 'create')
            ->notEmpty('user_created')
            ->requirePresence('user_session', 'create')
            ->notEmpty('user_session')
            ->requirePresence('user_cookie', 'create')
            ->notEmpty('user_cookie')
            ->requirePresence('user_ip', 'create')
            ->notEmpty('user_ip')
            ->add('user_last_login', 'valid', ['rule' => 'datetime'])
            ->requirePresence('user_last_login', 'create')
            ->notEmpty('user_last_login')
            ->add('user_customer_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('user_customer_id', 'create')
            ->notEmpty('user_customer_id')
            ->requirePresence('user_company_name', 'create')
            ->notEmpty('user_company_name');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['user_customer_id'], 'UserCustomers'));
        return $rules;
    }
}
