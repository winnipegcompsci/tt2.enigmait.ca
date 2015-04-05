<?php
namespace App\Test\TestCase\Controller;

use App\Controller\WtcrInventoryController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\WtcrInventoryController Test Case
 */
class WtcrInventoryControllerTest extends IntegrationTestCase
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
