<?php
namespace App\Model\Table;

use App\Model\Entity\Email;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Emails Model
 */
class EmailsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('emails');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Addresses', [
            'foreignKey' => 'address_id'
        ]);
        $this->belongsTo('EmailTypes', [
            'foreignKey' => 'email_type_id'
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
            ->requirePresence('string', 'create')
            ->notEmpty('string')
            ->requirePresence('is_primary', 'create')
            ->notEmpty('is_primary')
            ->requirePresence('notify', 'create')
            ->notEmpty('notify')
            ->allowEmpty('email_type_id');

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
        $rules->add($rules->existsIn(['email_type_id'], 'EmailTypes'));
        return $rules;
    }
}
