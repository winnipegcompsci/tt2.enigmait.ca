<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WtcrInventoryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WtcrInventoryTable Test Case
 */
class WtcrInventoryTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'WtcrInventory' => 'app.wtcr_inventory',
        'WtcrCategories' => 'app.wtcr_categories',
        'Inventory' => 'app.inventory',
        'WtcrManufacturers' => 'app.wtcr_manufacturers',
        'WtcrVendors' => 'app.wtcr_vendors',
        'WtcrProductMap' => 'app.wtcr_product_map',
        'WtcrProductCategories' => 'app.wtcr_product_categories',
        'WtcrVendorProducts' => 'app.wtcr_vendor_products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WtcrInventory') ? [] : ['className' => 'App\Model\Table\WtcrInventoryTable'];
        $this->WtcrInventory = TableRegistry::get('WtcrInventory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WtcrInventory);

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
