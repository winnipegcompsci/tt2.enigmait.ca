<?php
namespace App\Model\Table;

use App\Model\Entity\CustomerSite;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CustomerSites Model
 */
class CustomerSitesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('customer_sites');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id'
        ]);
        $this->hasMany('Tickets', [
            'foreignKey' => 'customer_site_id'
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
            ->add('customer_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('customer_id', 'create')
            ->notEmpty('customer_id')
            ->requirePresence('site_name', 'create')
            ->notEmpty('site_name')
            ->requirePresence('disabled', 'create')
            ->notEmpty('disabled');

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
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        return $rules;
    }
}
