<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CountriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CountriesTable Test Case
 */
class CountriesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Countries' => 'app.countries',
        'Addresses' => 'app.addresses',
        'Provinces' => 'app.provinces',
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
        'TicketEvents' => 'app.ticket_events',
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
        $config = TableRegistry::exists('Countries') ? [] : ['className' => 'App\Model\Table\CountriesTable'];
        $this->Countries = TableRegistry::get('Countries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Countries);

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
