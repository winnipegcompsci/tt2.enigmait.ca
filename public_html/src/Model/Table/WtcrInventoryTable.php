<?php
namespace App\Model\Table;

use App\Model\Entity\WtcrInventory;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WtcrInventory Model
 */
class WtcrInventoryTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('wtcr_inventory');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('WtcrProductCategories', [
            'foreignKey' => 'wtcr_product_category_id'
        ]);
        $this->belongsTo('WtcrVendors', [
            'foreignKey' => 'wtcr_vendor_id'
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
            ->allowEmpty('wtcr_sku')
            ->allowEmpty('product_name')
            ->add('wtcr_product_category_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('wtcr_product_category_id', 'create')
            ->notEmpty('wtcr_product_category_id')
            ->allowEmpty('mfg_part_number')
            ->add('wtcr_vendor_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('wtcr_vendor_id', 'create')
            ->notEmpty('wtcr_vendor_id')
            ->allowEmpty('vendor_sku')
            ->add('vendor_price', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('vendor_price')
            ->add('received_date', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('received_date')
            ->add('markup', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('markup')
            ->allowEmpty('serial_numbers');

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
        $rules->add($rules->existsIn(['wtcr_product_category_id'], 'WtcrProductCategories'));
        $rules->add($rules->existsIn(['wtcr_vendor_id'], 'WtcrVendors'));
        return $rules;
    }
}
