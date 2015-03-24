<?php
namespace App\Model\Table;

use App\Model\Entity\WtcrSalesVehicleTemplate;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WtcrSalesVehicleTemplates Model
 */
class WtcrSalesVehicleTemplatesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('wtcr_sales_vehicle_templates');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsTo('WtcrSalesVehicles', [
            'foreignKey' => 'wtcr_sales_vehicle_id'
        ]);
        $this->hasMany('WtcrSalesVehicles', [
            'foreignKey' => 'wtcr_sales_vehicle_template_id'
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
            ->allowEmpty('wtcr_sales_vehicle_id')
            ->allowEmpty('name')
            ->allowEmpty('template_data');

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
        $rules->add($rules->existsIn(['wtcr_sales_vehicle_id'], 'WtcrSalesVehicles'));
        return $rules;
    }
}
