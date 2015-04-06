<?php
namespace App\Model\Table;

use App\Model\Entity\WtcrVendor;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WtcrVendors Model
 */
class WtcrVendorsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('wtcr_vendors');
        $this->displayField('vendor_name');
        $this->primaryKey('id');
        $this->hasMany('Inventory', [
            'foreignKey' => 'wtcr_vendor_id'
        ]);
        $this->hasMany('WtcrProductMap', [
            'foreignKey' => 'wtcr_vendor_id'
        ]);
        $this->hasMany('WtcrVendorProducts', [
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
            ->allowEmpty('vendor_name')
            ->add('update_freq_hours', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('update_freq_hours');

        return $validator;
    }
}
