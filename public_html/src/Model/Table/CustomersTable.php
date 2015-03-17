<?php
namespace App\Model\Table;

use App\Model\Entity\Customer;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customers Model
 */
class CustomersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('customers');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsTo('Addresses', [
            'foreignKey' => 'address_id'
        ]);
        $this->belongsTo('Contacts', [
            'foreignKey' => 'contact_id'
        ]);
        $this->belongsTo('BillingPlans', [
            'foreignKey' => 'billing_plan_id'
        ]);
        $this->belongsTo('CustomerNotes', [
            'foreignKey' => 'customer_notes_id'
        ]);
        $this->hasMany('Contacts', [
            'foreignKey' => 'customer_id'
        ]);
        $this->hasMany('CustomerNotes', [
            'foreignKey' => 'customer_id'
        ]);
        $this->hasMany('CustomerSites', [
            'foreignKey' => 'customer_id'
        ]);
        $this->hasMany('Quotes', [
            'foreignKey' => 'customer_id'
        ]);
        $this->hasMany('Tickets', [
            'foreignKey' => 'customer_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->add('address_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('address_id', 'create')
            ->notEmpty('address_id')
            ->add('contact_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('contact_id', 'create')
            ->notEmpty('contact_id')
            ->requirePresence('number', 'create')
            ->notEmpty('number')
            ->requirePresence('disabled', 'create')
            ->notEmpty('disabled')
            ->add('billing_plan_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('billing_plan_id', 'create')
            ->notEmpty('billing_plan_id')
            ->allowEmpty('customer_notes_id');

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
        $rules->add($rules->existsIn(['address_id'], 'Addresses'));
        $rules->add($rules->existsIn(['contact_id'], 'Contacts'));
        $rules->add($rules->existsIn(['billing_plan_id'], 'BillingPlans'));
        $rules->add($rules->existsIn(['customer_notes_id'], 'CustomerNotes'));
        return $rules;
    }
}
