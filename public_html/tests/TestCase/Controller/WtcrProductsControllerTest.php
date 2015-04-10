<?php
namespace App\Test\TestCase\Controller;

use App\Controller\WtcrProductsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\WtcrProductsController Test Case
 */
class WtcrProductsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'WtcrProducts' => 'app.wtcr_products',
        'WtcrProductCategories' => 'app.wtcr_product_categories',
        'WtcrInventory' => 'app.wtcr_inventory',
        'WtcrVendors' => 'app.wtcr_vendors',
        'Inventory' => 'app.inventory',
        'WtcrCategories' => 'app.wtcr_categories',
        'WtcrManufacturers' => 'app.wtcr_manufacturers',
        'WtcrProductMap' => 'app.wtcr_product_map',
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
