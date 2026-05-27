<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HotelDataTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HotelDataTable Test Case
 */
class HotelDataTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HotelDataTable
     */
    protected $HotelData;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.HotelData',
        'app.Hotels',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('HotelData') ? [] : ['className' => HotelDataTable::class];
        $this->HotelData = $this->getTableLocator()->get('HotelData', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->HotelData);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\HotelDataTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
