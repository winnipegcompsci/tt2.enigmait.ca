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
            ->notEmpty('ticket_id');
     

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
