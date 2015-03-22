<?php
namespace App\Model\Table;

use App\Model\Entity\PhoneNumber;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PhoneNumbers Model
 */
class PhoneNumbersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('phone_numbers');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Addresses', [
            'foreignKey' => 'address_id'
        ]);
        $this->belongsTo('PhoneTypes', [
            'foreignKey' => 'phone_type_id'
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
            ->add('address_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('address_id', 'create')
            ->notEmpty('address_id')
            ->requirePresence('phone_number', 'create')
            ->notEmpty('phone_number')
            ->requirePresence('ext', 'create')
            ->notEmpty('ext')
            ->add('phone_type_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('phone_type_id', 'create')
            ->notEmpty('phone_type_id')
            ->requirePresence('phone_is_primary', 'create')
            ->notEmpty('phone_is_primary');

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
        $rules->add($rules->existsIn(['phone_type_id'], 'PhoneTypes'));
        return $rules;
    }
}
