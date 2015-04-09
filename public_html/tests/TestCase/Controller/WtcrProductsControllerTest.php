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
        'WtcrVendorProducts' => 'app.wtcr_vendor_products',
        'WtcrVendors' => 'app.wtcr_vendors',
        'Inventory' => 'app.inventory',
        'WtcrCategories' => 'app.wtcr_categories',
        'WtcrManufacturers' => 'app.wtcr_manufacturers',
        'WtcrProductMap' => 'app.wtcr_product_map'
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

    /**
     * Test add_vendor_product method
     *
     * @return void
     */
    public function testAddVendorProduct()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test getWtcrSku method
     *
     * @return void
     */
    public function testGetWtcrSku()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test createNewSku method
     *
     * @return void
     */
    public function testCreateNewSku()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
