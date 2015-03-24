<?php
namespace App\Model\Table;

use App\Model\Entity\WtcrCategory;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WtcrCategories Model
 */
class WtcrCategoriesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('wtcr_categories');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->hasMany('Inventory', [
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
            ->add('default_markup', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('default_markup');

        return $validator;
    }
}
