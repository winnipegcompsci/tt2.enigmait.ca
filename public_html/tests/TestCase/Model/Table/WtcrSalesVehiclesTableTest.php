<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WtcrSalesVehiclesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WtcrSalesVehiclesTable Test Case
 */
class WtcrSalesVehiclesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'WtcrSalesVehicles' => 'app.wtcr_sales_vehicles',
        'WtcrSalesVehicleTemplates' => 'app.wtcr_sales_vehicle_templates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WtcrSalesVehicles') ? [] : ['className' => 'App\Model\Table\WtcrSalesVehiclesTable'];
        $this->WtcrSalesVehicles = TableRegistry::get('WtcrSalesVehicles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WtcrSalesVehicles);

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
