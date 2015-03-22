<?php
namespace App\Model\Table;

use App\Model\Entity\WtcrSalesVehicle;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WtcrSalesVehicles Model
 */
class WtcrSalesVehiclesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('wtcr_sales_vehicles');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsTo('WtcrSalesVehicleTemplates', [
            'foreignKey' => 'wtcr_sales_vehicle_template_id'
        ]);
        $this->hasMany('WtcrSalesVehicleTemplates', [
            'foreignKey' => 'wtcr_sales_vehicle_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->add('wtcr_sales_vehicle_template_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('wtcr_sales_vehicle_template_id');

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
        $rules->add($rules->existsIn(['wtcr_sales_vehicle_template_id'], 'WtcrSalesVehicleTemplates'));
        return $rules;
    }
}
