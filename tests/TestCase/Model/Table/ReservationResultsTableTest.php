<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReservationResultsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReservationResultsTable Test Case
 */
class ReservationResultsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReservationResultsTable
     */
    protected $ReservationResults;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ReservationResults',
        'app.Reservations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ReservationResults') ? [] : ['className' => ReservationResultsTable::class];
        $this->ReservationResults = $this->getTableLocator()->get('ReservationResults', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ReservationResults);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ReservationResultsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ReservationResultsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
