<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WtcrProductMapTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WtcrProductMapTable Test Case
 */
class WtcrProductMapTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'WtcrProductMap' => 'app.wtcr_product_map',
        'WtcrVendors' => 'app.wtcr_vendors',
        'Inventory' => 'app.inventory',
        'WtcrCategories' => 'app.wtcr_categories',
        'WtcrManufacturers' => 'app.wtcr_manufacturers',
        'WtcrVendorProducts' => 'app.wtcr_vendor_products',
        'WtcrProductCategories' => 'app.wtcr_product_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WtcrProductMap') ? [] : ['className' => 'App\Model\Table\WtcrProductMapTable'];
        $this->WtcrProductMap = TableRegistry::get('WtcrProductMap', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WtcrProductMap);

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
