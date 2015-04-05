<?php
namespace App\Model\Table;

use App\Model\Entity\WtcrCurrencyProviderRate;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WtcrCurrencyProviderRates Model
 */
class WtcrCurrencyProviderRatesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('wtcr_currency_provider_rates');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('WtcrCurrencies', [
            'foreignKey' => 'wtcr_currency_id'
        ]);
        $this->belongsTo('WtcrCurrencyProviders', [
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
            ->add('wtcr_currency_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('wtcr_currency_id')
            ->add('wtcr_currency_provider_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('wtcr_currency_provider_id')
            ->add('rate', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('rate')
            ->add('timestamp', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('timestamp');

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
        $rules->add($rules->existsIn(['wtcr_currency_id'], 'WtcrCurrencies'));
        $rules->add($rules->existsIn(['wtcr_currency_provider_id'], 'WtcrCurrencyProviders'));
        return $rules;
    }
}
