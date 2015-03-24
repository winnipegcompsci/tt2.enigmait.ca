<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WtcrVendorProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WtcrVendorProductsTable Test Case
 */
class WtcrVendorProductsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'WtcrVendorProducts' => 'app.wtcr_vendor_products',
        'WtcrVendors' => 'app.wtcr_vendors',
        'WtcrCategories' => 'app.wtcr_categories',
        'Inventory' => 'app.inventory',
        'WtcrManufacturers' => 'app.wtcr_manufacturers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WtcrVendorProducts') ? [] : ['className' => 'App\Model\Table\WtcrVendorProductsTable'];
        $this->WtcrVendorProducts = TableRegistry::get('WtcrVendorProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WtcrVendorProducts);

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
