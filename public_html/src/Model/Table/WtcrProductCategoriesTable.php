<?php
namespace App\Model\Table;

use App\Model\Entity\WtcrProductCategory;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WtcrProductCategories Model
 */
class WtcrProductCategoriesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('wtcr_product_categories');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->hasMany('WtcrProducts', [
            'foreignKey' => 'wtcr_product_category_id'
        ]);
        $this->hasMany('WtcrVendorProducts', [
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
            ->allowEmpty('category_name')
            ->add('default_markup', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('default_markup');

        return $validator;
    }
}
