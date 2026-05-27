<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PackageDataTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PackageDataTable Test Case
 */
class PackageDataTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PackageDataTable
     */
    protected $PackageData;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.PackageData',
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
        $config = $this->getTableLocator()->exists('PackageData') ? [] : ['className' => PackageDataTable::class];
        $this->PackageData = $this->getTableLocator()->get('PackageData', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PackageData);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PackageDataTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
