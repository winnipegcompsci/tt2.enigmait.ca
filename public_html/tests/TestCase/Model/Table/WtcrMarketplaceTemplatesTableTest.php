<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WtcrMarketplaceTemplatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WtcrMarketplaceTemplatesTable Test Case
 */
class WtcrMarketplaceTemplatesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'WtcrMarketplaceTemplates' => 'app.wtcr_marketplace_templates',
        'Marketplaces' => 'app.marketplaces'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WtcrMarketplaceTemplates') ? [] : ['className' => 'App\Model\Table\WtcrMarketplaceTemplatesTable'];
        $this->WtcrMarketplaceTemplates = TableRegistry::get('WtcrMarketplaceTemplates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WtcrMarketplaceTemplates);

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
