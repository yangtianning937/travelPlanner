<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FlightDataTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FlightDataTable Test Case
 */
class FlightDataTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FlightDataTable
     */
    protected $FlightData;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.FlightData',
        'app.Flights',
        'app.Packages',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('FlightData') ? [] : ['className' => FlightDataTable::class];
        $this->FlightData = $this->getTableLocator()->get('FlightData', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->FlightData);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FlightDataTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
