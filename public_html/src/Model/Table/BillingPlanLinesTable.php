<?php
namespace App\Model\Table;

use App\Model\Entity\BillingPlanLine;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BillingPlanLines Model
 */
class BillingPlanLinesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('billing_plan_lines');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('BillingPlans', [
            'foreignKey' => 'billing_plan_id'
        ]);
        $this->belongsTo('TimeTypes', [
            'foreignKey' => 'time_type_id'
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
            ->add('billing_plan_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('billing_plan_id', 'create')
            ->notEmpty('billing_plan_id')
            ->add('time_type_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('time_type_id', 'create')
            ->notEmpty('time_type_id')
            ->add('minutes_per_unit', 'valid', ['rule' => 'numeric'])
            ->requirePresence('minutes_per_unit', 'create')
            ->notEmpty('minutes_per_unit')
            ->add('min_num_unit', 'valid', ['rule' => 'numeric'])
            ->requirePresence('min_num_unit', 'create')
            ->notEmpty('min_num_unit')
            ->add('min_unit', 'valid', ['rule' => 'numeric'])
            ->requirePresence('min_unit', 'create')
            ->notEmpty('min_unit')
            ->add('round_up_at_min', 'valid', ['rule' => 'numeric'])
            ->requirePresence('round_up_at_min', 'create')
            ->notEmpty('round_up_at_min')
            ->add('emerg_minutes_per_unit', 'valid', ['rule' => 'numeric'])
            ->requirePresence('emerg_minutes_per_unit', 'create')
            ->notEmpty('emerg_minutes_per_unit')
            ->add('emerg_min_num_units', 'valid', ['rule' => 'numeric'])
            ->requirePresence('emerg_min_num_units', 'create')
            ->notEmpty('emerg_min_num_units')
            ->add('emerg_min_unit', 'valid', ['rule' => 'numeric'])
            ->requirePresence('emerg_min_unit', 'create')
            ->notEmpty('emerg_min_unit')
            ->add('emerg_round_up_at_min', 'valid', ['rule' => 'numeric'])
            ->requirePresence('emerg_round_up_at_min', 'create')
            ->notEmpty('emerg_round_up_at_min');

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
        $rules->add($rules->existsIn(['billing_plan_id'], 'BillingPlans'));
        $rules->add($rules->existsIn(['time_type_id'], 'TimeTypes'));
        return $rules;
    }
}
