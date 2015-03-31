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
        $this->displayField('username');
        $this->primaryKey('id');
        $this->belongsTo('UserRoles', [
            'foreignKey' => 'user_role_id'
        ]);
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id'
        ]);
        $this->hasMany('CustomerNotes', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('ProjectTasks', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('TicketEvents', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('TicketHistory', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Tickets', [
            'foreignKey' => 'user_id'
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
            ->allowEmpty('id', 'create')
            ->requirePresence('username', 'create')
            ->notEmpty('username')
            ->requirePresence('password', 'create')
            ->notEmpty('password')
            ->requirePresence('secretkey', 'create')
            ->notEmpty('secretkey')
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name')
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name')
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email')
            ->add('user_role_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('user_role_id', 'create')
            ->notEmpty('user_role_id');


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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['user_role_id'], 'UserRoles'));
        // $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        return $rules;
    }
}
