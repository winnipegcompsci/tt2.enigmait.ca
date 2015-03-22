<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WtcrCurrencyProviderRatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WtcrCurrencyProviderRatesTable Test Case
 */
class WtcrCurrencyProviderRatesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'WtcrCurrencyProviderRates' => 'app.wtcr_currency_provider_rates',
        'WtcrCurrencies' => 'app.wtcr_currencies',
        'WtcrCurrencyProviders' => 'app.wtcr_currency_providers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WtcrCurrencyProviderRates') ? [] : ['className' => 'App\Model\Table\WtcrCurrencyProviderRatesTable'];
        $this->WtcrCurrencyProviderRates = TableRegistry::get('WtcrCurrencyProviderRates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WtcrCurrencyProviderRates);

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
