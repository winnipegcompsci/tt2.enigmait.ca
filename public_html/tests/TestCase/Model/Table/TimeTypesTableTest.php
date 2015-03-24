<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TimeTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TimeTypesTable Test Case
 */
class TimeTypesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'TimeTypes' => 'app.time_types',
        'BillingPlanLines' => 'app.billing_plan_lines',
        'BillingPlans' => 'app.billing_plans',
        'Customers' => 'app.customers',
        'Addresses' => 'app.addresses',
        'Provinces' => 'app.provinces',
        'Countries' => 'app.countries',
        'Contacts' => 'app.contacts',
        'ContactTypes' => 'app.contact_types',
        'Tickets' => 'app.tickets',
        'TicketTypes' => 'app.ticket_types',
        'ServiceTypes' => 'app.service_types',
        'TicketPriorities' => 'app.ticket_priorities',
        'TicketStatuses' => 'app.ticket_statuses',
        'Users' => 'app.users',
        'CustomerNotes' => 'app.customer_notes',
        'Events' => 'app.events',
        'EventTypes' => 'app.event_types',
        'BillingTypes' => 'app.billing_types',
        'TicketEvents' => 'app.ticket_events',
        'TicketEventTypes' => 'app.ticket_event_types',
        'TicketsHistory' => 'app.tickets_history',
        'CustomerSites' => 'app.customer_sites',
        'Projects' => 'app.projects',
        'ProjectStatuses' => 'app.project_statuses',
        'Quotes' => 'app.quotes',
        'QuoteTypes' => 'app.quote_types',
        'ProjectTasks' => 'app.project_tasks',
        'BillingStatuses' => 'app.billing_statuses',
        'Emails' => 'app.emails',
        'EmailTypes' => 'app.email_types',
        'PhoneNumbers' => 'app.phone_numbers',
        'PhoneTypes' => 'app.phone_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TimeTypes') ? [] : ['className' => 'App\Model\Table\TimeTypesTable'];
        $this->TimeTypes = TableRegistry::get('TimeTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TimeTypes);

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
}
