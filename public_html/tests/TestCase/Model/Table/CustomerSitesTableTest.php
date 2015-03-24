<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomerSitesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomerSitesTable Test Case
 */
class CustomerSitesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'CustomerSites' => 'app.customer_sites',
        'Customers' => 'app.customers',
        'Addresses' => 'app.addresses',
        'Provinces' => 'app.provinces',
        'Countries' => 'app.countries',
        'Contacts' => 'app.contacts',
        'ContactTypes' => 'app.contact_types',
        'Tickets' => 'app.tickets',
        'ProblemTypes' => 'app.problem_types',
        'ServiceTypes' => 'app.service_types',
        'TicketPriorities' => 'app.ticket_priorities',
        'TicketStatuses' => 'app.ticket_statuses',
        'Users' => 'app.users',
        'CustomerNotes' => 'app.customer_notes',
        'Events' => 'app.events',
        'EventTypes' => 'app.event_types',
        'BillingTypes' => 'app.billing_types',
        'TicketEvents' => 'app.ticket_events',
        'TimeTypes' => 'app.time_types',
        'TicketsHistory' => 'app.tickets_history',
        'Projects' => 'app.projects',
        'ProjectStatuses' => 'app.project_statuses',
        'Quotes' => 'app.quotes',
        'BillingStatuses' => 'app.billing_statuses',
        'Emails' => 'app.emails',
        'PhoneNumbers' => 'app.phone_numbers',
        'BillingPlans' => 'app.billing_plans'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CustomerSites') ? [] : ['className' => 'App\Model\Table\CustomerSitesTable'];
        $this->CustomerSites = TableRegistry::get('CustomerSites', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CustomerSites);

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
