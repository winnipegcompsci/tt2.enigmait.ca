<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WtcrSalesVehicleTemplatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WtcrSalesVehicleTemplatesTable Test Case
 */
class WtcrSalesVehicleTemplatesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'WtcrSalesVehicleTemplates' => 'app.wtcr_sales_vehicle_templates',
        'WtcrSalesVehicles' => 'app.wtcr_sales_vehicles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WtcrSalesVehicleTemplates') ? [] : ['className' => 'App\Model\Table\WtcrSalesVehicleTemplatesTable'];
        $this->WtcrSalesVehicleTemplates = TableRegistry::get('WtcrSalesVehicleTemplates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WtcrSalesVehicleTemplates);

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
