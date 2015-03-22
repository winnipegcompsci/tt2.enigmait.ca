<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TicketEventsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TicketEventsTable Test Case
 */
class TicketEventsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'TicketEvents' => 'app.ticket_events',
        'Tickets' => 'app.tickets',
        'Customers' => 'app.customers',
        'Addresses' => 'app.addresses',
        'Provinces' => 'app.provinces',
        'Countries' => 'app.countries',
        'Contacts' => 'app.contacts',
        'ContactTypes' => 'app.contact_types',
        'Emails' => 'app.emails',
        'EmailTypes' => 'app.email_types',
        'PhoneNumbers' => 'app.phone_numbers',
        'PhoneTypes' => 'app.phone_types',
        'BillingPlans' => 'app.billing_plans',
        'CustomerNotes' => 'app.customer_notes',
        'Users' => 'app.users',
        'Events' => 'app.events',
        'EventTypes' => 'app.event_types',
        'BillingTypes' => 'app.billing_types',
        'TimeTypes' => 'app.time_types',
        'TicketsHistory' => 'app.tickets_history',
        'CustomerSites' => 'app.customer_sites',
        'Quotes' => 'app.quotes',
        'Projects' => 'app.projects',
        'ProjectStatuses' => 'app.project_statuses',
        'ProblemTypes' => 'app.problem_types',
        'ServiceTypes' => 'app.service_types',
        'TicketPriorities' => 'app.ticket_priorities',
        'TicketStatuses' => 'app.ticket_statuses',
        'BillingStatuses' => 'app.billing_statuses',
        'TicketEventTypes' => 'app.ticket_event_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TicketEvents') ? [] : ['className' => 'App\Model\Table\TicketEventsTable'];
        $this->TicketEvents = TableRegistry::get('TicketEvents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TicketEvents);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
