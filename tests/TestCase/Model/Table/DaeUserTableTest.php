<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DaeUserTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DaeUserTable Test Case
 */
class DaeUserTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DaeUserTable
     */
    protected $DaeUser;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.DaeUser',
        'app.Users',
        'app.Daes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DaeUser') ? [] : ['className' => DaeUserTable::class];
        $this->DaeUser = $this->getTableLocator()->get('DaeUser', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DaeUser);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DaeUserTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DaeUserTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
