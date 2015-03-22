<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WtcrCompetitorProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WtcrCompetitorProductsTable Test Case
 */
class WtcrCompetitorProductsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'WtcrCompetitorProducts' => 'app.wtcr_competitor_products',
        'WtcrCompetitors' => 'app.wtcr_competitors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WtcrCompetitorProducts') ? [] : ['className' => 'App\Model\Table\WtcrCompetitorProductsTable'];
        $this->WtcrCompetitorProducts = TableRegistry::get('WtcrCompetitorProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WtcrCompetitorProducts);

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
