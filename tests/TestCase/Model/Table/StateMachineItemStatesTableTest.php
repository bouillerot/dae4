<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StateMachineItemStatesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StateMachineItemStatesTable Test Case
 */
class StateMachineItemStatesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StateMachineItemStatesTable
     */
    protected $StateMachineItemStates;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.StateMachineItemStates',
        'app.StateMachineProcesses',
        'app.StateMachineItemStateLogs',
        'app.StateMachineTimeouts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('StateMachineItemStates') ? [] : ['className' => StateMachineItemStatesTable::class];
        $this->StateMachineItemStates = $this->getTableLocator()->get('StateMachineItemStates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->StateMachineItemStates);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\StateMachineItemStatesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\StateMachineItemStatesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
