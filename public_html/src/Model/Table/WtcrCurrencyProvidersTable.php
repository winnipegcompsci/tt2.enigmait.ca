<?php
namespace App\Model\Table;

use App\Model\Entity\WtcrCurrencyProvider;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WtcrCurrencyProviders Model
 */
class WtcrCurrencyProvidersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('wtcr_currency_providers');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsTo('WtcrCurrencies', [
            'foreignKey' => 'wtcr_currencies_id'
        ]);
        $this->hasMany('WtcrCurrencies', [
            'foreignKey' => 'wtcr_currency_provider_id'
        ]);
        $this->hasMany('WtcrCurrencyProviderRates', [
            'foreignKey' => 'wtcr_currency_provider_id'
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
            ->allowEmpty('currency_provider_name')
            ->add('wtcr_currencies_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('wtcr_currencies_id')
            ->add('update_freq', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('update_freq');

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
        $rules->add($rules->existsIn(['wtcr_currencies_id'], 'WtcrCurrencies'));
        return $rules;
    }
}
