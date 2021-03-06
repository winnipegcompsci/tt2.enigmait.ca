<?php
namespace App\Model\Table;

use App\Model\Entity\WtcrProductMap;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WtcrProductMap Model
 */
class WtcrProductMapTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('wtcr_product_map');
        $this->displayField('id');
        $this->primaryKey(['id', 'createnode', 'wtcr_product_category_id']);
        $this->belongsTo('WtcrVendors', [
            'foreignKey' => 'wtcr_vendor_id'
        ]);
        $this->belongsTo('WtcrProductCategories', [
            'foreignKey' => 'wtcr_product_category_id'
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
            ->add('wtcr_vendor_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('wtcr_vendor_id', 'create')
            ->notEmpty('wtcr_vendor_id')
            ->requirePresence('mfg_part_num', 'create')
            ->notEmpty('mfg_part_num')
            ->allowEmpty('wtcrsku')
            ->add('wtcr_product_category_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('wtcr_product_category_id', 'create')
            ->allowEmpty('description')
            ->requirePresence('wtcr_vendor_sku', 'create')
            ->notEmpty('wtcr_vendor_sku')
            ->requirePresence('supplierstock', 'create')
            ->notEmpty('supplierstock')
            ->add('autoupdate', 'valid', ['rule' => 'numeric'])
            ->requirePresence('autoupdate', 'create')
            ->notEmpty('autoupdate')
            ->allowEmpty('suggestedprice')
            ->allowEmpty('suggestedmarkup')
            ->allowEmpty('wtcrprice')
            ->add('createnode', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('createnode', 'create')
            ->allowEmpty('wtcr_nid')
            ->add('lastupdated', 'valid', ['rule' => 'datetime'])
            ->requirePresence('lastupdated', 'create')
            ->notEmpty('lastupdated');

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
        $rules->add($rules->existsIn(['wtcr_product_category_id'], 'WtcrProductCategories'));
        return $rules;
    }
}
