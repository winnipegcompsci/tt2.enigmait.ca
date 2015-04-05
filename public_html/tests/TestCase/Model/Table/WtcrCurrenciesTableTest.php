<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WtcrCurrenciesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WtcrCurrenciesTable Test Case
 */
class WtcrCurrenciesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'WtcrCurrencies' => 'app.wtcr_currencies',
        'WtcrCurrencyProviders' => 'app.wtcr_currency_providers',
        'WtcrCurrencyProviderRates' => 'app.wtcr_currency_provider_rates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WtcrCurrencies') ? [] : ['className' => 'App\Model\Table\WtcrCurrenciesTable'];
        $this->WtcrCurrencies = TableRegistry::get('WtcrCurrencies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WtcrCurrencies);

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
