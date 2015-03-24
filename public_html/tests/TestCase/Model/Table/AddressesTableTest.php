<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AddressesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AddressesTable Test Case
 */
class AddressesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Addresses' => 'app.addresses',
        'Provinces' => 'app.provinces',
        'Countries' => 'app.countries',
        'Contacts' => 'app.contacts',
        'Customers' => 'app.customers',
        'BillingPlans' => 'app.billing_plans',
        'CustomerNotes' => 'app.customer_notes',
        'CustomerSites' => 'app.customer_sites',
        'Quotes' => 'app.quotes',
        'Tickets' => 'app.tickets',
        'ProblemTypes' => 'app.problem_types',
        'ServiceTypes' => 'app.service_types',
        'TicketPriorities' => 'app.ticket_priorities',
        'TicketStatuses' => 'app.ticket_statuses',
        'Users' => 'app.users',
        'Events' => 'app.events',
        'EventTypes' => 'app.event_types',
        'BillingTypes' => 'app.billing_types',
        'TimeTypes' => 'app.time_types',
        'TicketsHistory' => 'app.tickets_history',
        'Projects' => 'app.projects',
        'ProjectStatuses' => 'app.project_statuses',
        'BillingStatuses' => 'app.billing_statuses',
        'ContactTypes' => 'app.contact_types',
        'Emails' => 'app.emails',
        'PhoneNumbers' => 'app.phone_numbers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Addresses') ? [] : ['className' => 'App\Model\Table\AddressesTable'];
        $this->Addresses = TableRegistry::get('Addresses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Addresses);

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
