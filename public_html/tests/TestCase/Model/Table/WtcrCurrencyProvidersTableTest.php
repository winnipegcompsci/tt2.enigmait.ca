<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WtcrCurrencyProvidersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WtcrCurrencyProvidersTable Test Case
 */
class WtcrCurrencyProvidersTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'WtcrCurrencyProviders' => 'app.wtcr_currency_providers',
        'WtcrCurrencies' => 'app.wtcr_currencies',
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
        $config = TableRegistry::exists('WtcrCurrencyProviders') ? [] : ['className' => 'App\Model\Table\WtcrCurrencyProvidersTable'];
        $this->WtcrCurrencyProviders = TableRegistry::get('WtcrCurrencyProviders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WtcrCurrencyProviders);

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
