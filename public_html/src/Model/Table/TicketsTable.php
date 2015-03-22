<?php
namespace App\Model\Table;

use App\Model\Entity\Ticket;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tickets Model
 */
class TicketsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('tickets');
        $this->displayField('t_ticket_id');
        $this->primaryKey('t_ticket_id');
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id'
        ]);
        $this->belongsTo('Contacts', [
            'foreignKey' => 'contact_id'
        ]);
        $this->belongsTo('TicketTypes', [
            'foreignKey' => 'ticket_type_id'
        ]);
        $this->belongsTo('ServiceTypes', [
            'foreignKey' => 'service_type_id'
        ]);
        $this->belongsTo('TicketPriorities', [
            'foreignKey' => 'ticket_priority_id'
        ]);
        $this->belongsTo('TicketStatuses', [
            'foreignKey' => 'ticket_status_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('CustomerSites', [
            'foreignKey' => 'customer_site_id'
        ]);
        $this->belongsTo('Projects', [
            'foreignKey' => 'project_id'
        ]);
        $this->belongsTo('BillingStatuses', [
            'foreignKey' => 'billing_status_id'
        ]);
        $this->belongsTo('Quotes', [
            'foreignKey' => 'quote_id'
        ]);
        $this->hasMany('TicketEvents', [
            'foreignKey' => 'ticket_id'
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
            ->add('customer_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('customer_id', 'create')
            ->notEmpty('customer_id')
            ->add('contact_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('contact_id', 'create')
            ->notEmpty('contact_id')
            ->add('ticket_type_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ticket_type_id', 'create')
            ->notEmpty('ticket_type_id')
            ->add('service_type_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('service_type_id', 'create')
            ->notEmpty('service_type_id')
            ->add('ticket_priority_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ticket_priority_id', 'create')
            ->notEmpty('ticket_priority_id')
            ->requirePresence('problem_description', 'create')
            ->notEmpty('problem_description')
            ->requirePresence('solution', 'create')
            ->notEmpty('solution')
            ->add('ticket_status_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ticket_status_id', 'create')
            ->notEmpty('ticket_status_id')
            ->add('user_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('user_id', 'create')
            ->notEmpty('user_id')
            ->add('dis', 'valid', ['rule' => 'datetime'])
            ->requirePresence('dis', 'create')
            ->notEmpty('dis')
            ->add('customer_site_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('customer_site_id', 'create')
            ->notEmpty('customer_site_id')
            ->add('project_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('project_id', 'create')
            ->notEmpty('project_id')
            ->add('completion', 'valid', ['rule' => 'numeric'])
            ->requirePresence('completion', 'create')
            ->notEmpty('completion')
            ->requirePresence('billing_status_id', 'create')
            ->notEmpty('billing_status_id')
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
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['contact_id'], 'Contacts'));
        $rules->add($rules->existsIn(['ticket_type_id'], 'TicketTypes'));
        $rules->add($rules->existsIn(['service_type_id'], 'ServiceTypes'));
        $rules->add($rules->existsIn(['ticket_priority_id'], 'TicketPriorities'));
        $rules->add($rules->existsIn(['ticket_status_id'], 'TicketStatuses'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['customer_site_id'], 'CustomerSites'));
        $rules->add($rules->existsIn(['project_id'], 'Projects'));
        $rules->add($rules->existsIn(['billing_status_id'], 'BillingStatuses'));
        $rules->add($rules->existsIn(['quote_id'], 'Quotes'));
        return $rules;
    }
}
