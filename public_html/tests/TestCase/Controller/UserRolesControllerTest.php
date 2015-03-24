<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UserRolesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\UserRolesController Test Case
 */
class UserRolesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'UserRoles' => 'app.user_roles',
        'Notifications' => 'app.notifications',
        'NotificationTypes' => 'app.notification_types',
        'Users' => 'app.users',
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
        'CustomerSites' => 'app.customer_sites',
        'Projects' => 'app.projects',
        'ProjectStatuses' => 'app.project_statuses',
        'Quotes' => 'app.quotes',
        'QuoteTypes' => 'app.quote_types',
        'ProjectTasks' => 'app.project_tasks',
        'BillingStatuses' => 'app.billing_statuses',
        'Events' => 'app.events',
        'EventTypes' => 'app.event_types',
        'BillingTypes' => 'app.billing_types',
        'TicketEvents' => 'app.ticket_events',
        'TicketEventTypes' => 'app.ticket_event_types',
        'TimeTypes' => 'app.time_types',
        'Emails' => 'app.emails',
        'EmailTypes' => 'app.email_types',
        'PhoneNumbers' => 'app.phone_numbers',
        'PhoneTypes' => 'app.phone_types',
        'BillingPlans' => 'app.billing_plans',
        'CustomerNotes' => 'app.customer_notes',
        'TicketsHistory' => 'app.tickets_history'
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
