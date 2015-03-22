<?php
namespace App\Model\Table;

use App\Model\Entity\TicketEvent;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TicketEvents Model
 */
class TicketEventsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('ticket_events');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Tickets', [
            'foreignKey' => 'ticket_id'
        ]);
        $this->belongsTo('TicketEventTypes', [
            'foreignKey' => 'ticket_event_type_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('BillingTypes', [
            'foreignKey' => 'billing_type_id'
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
            ->add('ticket_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ticket_id', 'create')
            ->notEmpty('ticket_id')
            ->add('ticket_event_type_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ticket_event_type_id', 'create')
            ->notEmpty('ticket_event_type_id')
            ->requirePresence('description', 'create')
            ->notEmpty('description')
            ->add('user_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('user_id', 'create')
            ->notEmpty('user_id')
            ->add('timestamp', 'valid', ['rule' => 'datetime'])
            ->requirePresence('timestamp', 'create')
            ->notEmpty('timestamp')
            ->add('billing_type_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('billing_type_id', 'create')
            ->notEmpty('billing_type_id')
            ->add('time_type_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('time_type_id', 'create')
            ->notEmpty('time_type_id')
            ->add('time_taken', 'valid', ['rule' => 'numeric'])
            ->requirePresence('time_taken', 'create')
            ->notEmpty('time_taken')
            ->requirePresence('is_resolution', 'create')
            ->notEmpty('is_resolution')
            ->add('resolution_date', 'valid', ['rule' => 'datetime'])
            ->requirePresence('resolution_date', 'create')
            ->notEmpty('resolution_date')
            ->add('time_start', 'valid', ['rule' => 'datetime'])
            ->requirePresence('time_start', 'create')
            ->notEmpty('time_start')
            ->add('time_end', 'valid', ['rule' => 'datetime'])
            ->requirePresence('time_end', 'create')
            ->notEmpty('time_end');

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
        $rules->add($rules->existsIn(['ticket_id'], 'Tickets'));
        $rules->add($rules->existsIn(['ticket_event_type_id'], 'TicketEventTypes'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['billing_type_id'], 'BillingTypes'));
        $rules->add($rules->existsIn(['time_type_id'], 'TimeTypes'));
        return $rules;
    }
}
