<?php
namespace App\Test\TestCase\Controller;

use App\Controller\WtcrProductMapController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\WtcrProductMapController Test Case
 */
class WtcrProductMapControllerTest extends IntegrationTestCase
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
