<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomerPreferencesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomerPreferencesTable Test Case
 */
class CustomerPreferencesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomerPreferencesTable
     */
    protected $CustomerPreferences;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CustomerPreferences',
        'app.Customers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CustomerPreferences') ? [] : ['className' => CustomerPreferencesTable::class];
        $this->CustomerPreferences = $this->getTableLocator()->get('CustomerPreferences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CustomerPreferences);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CustomerPreferencesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CustomerPreferencesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
