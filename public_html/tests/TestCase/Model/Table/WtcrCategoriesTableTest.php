<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WtcrCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WtcrCategoriesTable Test Case
 */
class WtcrCategoriesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'WtcrCategories' => 'app.wtcr_categories',
        'Inventory' => 'app.inventory',
        'WtcrManufacturers' => 'app.wtcr_manufacturers',
        'WtcrVendors' => 'app.wtcr_vendors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WtcrCategories') ? [] : ['className' => 'App\Model\Table\WtcrCategoriesTable'];
        $this->WtcrCategories = TableRegistry::get('WtcrCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WtcrCategories);

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
}
