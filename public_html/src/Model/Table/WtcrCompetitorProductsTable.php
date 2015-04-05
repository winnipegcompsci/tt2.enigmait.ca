<?php
namespace App\Model\Table;

use App\Model\Entity\WtcrCompetitorProduct;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WtcrCompetitorProducts Model
 */
class WtcrCompetitorProductsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('wtcr_competitor_products');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsTo('WtcrCompetitors', [
            'foreignKey' => 'wtcr_competitor_id'
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
            ->allowEmpty('competitor_product_name')
            ->add('wtcr_competitor_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('wtcr_competitor_id')
            ->allowEmpty('wtcr_competitor_sku')
            ->allowEmpty('mfg_part_number')
            ->add('competitor_price', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('competitor_price')
            ->add('last_updated', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('last_updated')
            ->allowEmpty('competitor_url');

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
        $rules->add($rules->existsIn(['wtcr_competitor_id'], 'WtcrCompetitors'));
        return $rules;
    }
}
