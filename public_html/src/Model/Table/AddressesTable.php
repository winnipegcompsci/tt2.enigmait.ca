<?php
namespace App\Model\Table;

use App\Model\Entity\Address;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Addresses Model
 */
class AddressesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('addresses');
        $this->displayField('address');
        $this->primaryKey('id');
        $this->belongsTo('Provinces', [
            'foreignKey' => 'province_id'
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id'
        ]);
        $this->hasMany('Contacts', [
            'foreignKey' => 'address_id'
        ]);
        $this->hasMany('Customers', [
            'foreignKey' => 'address_id'
        ]);
        $this->hasMany('Emails', [
            'foreignKey' => 'address_id'
        ]);
        $this->hasMany('PhoneNumbers', [
            'foreignKey' => 'address_id'
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
            ->requirePresence('address', 'create')
            ->notEmpty('address')
            ->requirePresence('postal_code', 'create')
            ->notEmpty('postal_code')
            ->requirePresence('city', 'create')
            ->notEmpty('city')
            ->add('province_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('province_id', 'create')
            ->notEmpty('province_id')
            ->add('country_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('country_id', 'create')
            ->notEmpty('country_id')
            ->requirePresence('fax', 'create')
            ->notEmpty('fax')
            ->requirePresence('website', 'create')
            ->notEmpty('website');

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
        $rules->add($rules->existsIn(['province_id'], 'Provinces'));
        $rules->add($rules->existsIn(['country_id'], 'Countries'));
        return $rules;
    }
}
