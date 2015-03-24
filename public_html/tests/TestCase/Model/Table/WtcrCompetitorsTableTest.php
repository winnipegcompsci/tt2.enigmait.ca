<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WtcrCompetitorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WtcrCompetitorsTable Test Case
 */
class WtcrCompetitorsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'WtcrCompetitors' => 'app.wtcr_competitors',
        'WtcrCompetitorProducts' => 'app.wtcr_competitor_products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WtcrCompetitors') ? [] : ['className' => 'App\Model\Table\WtcrCompetitorsTable'];
        $this->WtcrCompetitors = TableRegistry::get('WtcrCompetitors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WtcrCompetitors);

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
