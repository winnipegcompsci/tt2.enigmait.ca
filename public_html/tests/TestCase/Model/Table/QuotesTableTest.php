<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuotesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuotesTable Test Case
 */
class QuotesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Quotes' => 'app.quotes',
        'Customers' => 'app.customers',
        'Addresses' => 'app.addresses',
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
        'TimeTypes' => 'app.time_types',
        'TicketsHistory' => 'app.tickets_history',
        'CustomerSites' => 'app.customer_sites',
        'Projects' => 'app.projects',
        'ProjectStatuses' => 'app.project_statuses',
        'BillingStatuses' => 'app.billing_statuses',
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
        $config = TableRegistry::exists('Quotes') ? [] : ['className' => 'App\Model\Table\QuotesTable'];
        $this->Quotes = TableRegistry::get('Quotes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Quotes);

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
