<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BillingStatusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BillingStatusesTable Test Case
 */
class BillingStatusesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'BillingStatuses' => 'app.billing_statuses',
        'Tickets' => 'app.tickets',
        'Customers' => 'app.customers',
        'Addresses' => 'app.addresses',
        'Provinces' => 'app.provinces',
        'Countries' => 'app.countries',
        'Contacts' => 'app.contacts',
        'ContactTypes' => 'app.contact_types',
        'Emails' => 'app.emails',
        'PhoneNumbers' => 'app.phone_numbers',
        'BillingPlans' => 'app.billing_plans',
        'CustomerNotes' => 'app.customer_notes',
        'CustomerSites' => 'app.customer_sites',
        'Quotes' => 'app.quotes',
        'Projects' => 'app.projects',
        'ProjectStatuses' => 'app.project_statuses',
        'Users' => 'app.users',
        'Events' => 'app.events',
        'EventTypes' => 'app.event_types',
        'BillingTypes' => 'app.billing_types',
        'TimeTypes' => 'app.time_types',
        'TicketsHistory' => 'app.tickets_history',
        'ProblemTypes' => 'app.problem_types',
        'ServiceTypes' => 'app.service_types',
        'TicketPriorities' => 'app.ticket_priorities',
        'TicketStatuses' => 'app.ticket_statuses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BillingStatuses') ? [] : ['className' => 'App\Model\Table\BillingStatusesTable'];
        $this->BillingStatuses = TableRegistry::get('BillingStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BillingStatuses);

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
