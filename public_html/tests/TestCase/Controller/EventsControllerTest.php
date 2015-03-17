<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EventsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\EventsController Test Case
 */
class EventsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Events' => 'app.events',
        'Tickets' => 'app.tickets',
        'Customers' => 'app.customers',
        'Addresses' => 'app.addresses',
        'Contacts' => 'app.contacts',
        'BillingPlans' => 'app.billing_plans',
        'CustomerNotes' => 'app.customer_notes',
        'CustomerSites' => 'app.customer_sites',
        'Quotes' => 'app.quotes',
        'ProblemTypes' => 'app.problem_types',
        'ServiceTypes' => 'app.service_types',
        'TicketPriorities' => 'app.ticket_priorities',
        'TicketStatuses' => 'app.ticket_statuses',
        'Users' => 'app.users',
        'Projects' => 'app.projects',
        'ProjectStatuses' => 'app.project_statuses',
        'BillingStatuses' => 'app.billing_statuses',
        'Types' => 'app.types',
        'BillingTypes' => 'app.billing_types',
        'TimeTypes' => 'app.time_types'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
