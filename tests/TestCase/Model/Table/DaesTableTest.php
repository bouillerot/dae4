<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DaesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DaesTable Test Case
 */
class DaesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DaesTable
     */
    protected $Daes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Daes',
        'app.Users',
        'app.ItemStates',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Daes') ? [] : ['className' => DaesTable::class];
        $this->Daes = $this->getTableLocator()->get('Daes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Daes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DaesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
