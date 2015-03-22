<?php
namespace App\Model\Table;

use App\Model\Entity\WtcrVendorProduct;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WtcrVendorProducts Model
 */
class WtcrVendorProductsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('wtcr_vendor_products');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsTo('WtcrVendors', [
            'foreignKey' => 'wtcr_vendor_id'
        ]);
        $this->belongsTo('WtcrCategories', [
            'foreignKey' => 'wtcr_category_id'
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
            ->allowEmpty('name')
            ->add('wtcr_vendor_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('wtcr_vendor_id')
            ->allowEmpty('vendor_sku')
            ->allowEmpty('wtcr_sku')
            ->add('vendor_price', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('vendor_price')
            ->add('wtcr_category_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('wtcr_category_id')
            ->add('last_updated', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('last_updated');

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
        $rules->add($rules->existsIn(['wtcr_vendor_id'], 'WtcrVendors'));
        $rules->add($rules->existsIn(['wtcr_category_id'], 'WtcrCategories'));
        return $rules;
    }
}
