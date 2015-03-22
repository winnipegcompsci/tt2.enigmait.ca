<?php
namespace App\Model\Table;

use App\Model\Entity\Project;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projects Model
 */
class ProjectsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('projects');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsTo('ProjectStatuses', [
            'foreignKey' => 'project_status_id'
        ]);
        $this->belongsTo('Quotes', [
            'foreignKey' => 'quote_id'
        ]);
        $this->hasMany('ProjectTasks', [
            'foreignKey' => 'project_id'
        ]);
        $this->hasMany('Tickets', [
            'foreignKey' => 'project_id'
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
            ->add('date_created', 'valid', ['rule' => 'datetime'])
            ->requirePresence('date_created', 'create')
            ->notEmpty('date_created')
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->requirePresence('description', 'create')
            ->notEmpty('description')
            ->add('project_status_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('project_status_id', 'create')
            ->notEmpty('project_status_id')
            ->add('max_hours', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('max_hours')
            ->add('quoted_hours', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('quoted_hours')
            ->add('due_date', 'valid', ['rule' => 'date'])
            ->allowEmpty('due_date')
            ->allowEmpty('quote_id');

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
        $rules->add($rules->existsIn(['project_status_id'], 'ProjectStatuses'));
        $rules->add($rules->existsIn(['quote_id'], 'Quotes'));
        return $rules;
    }
}
