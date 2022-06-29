<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DaesUsersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DaesUsersTable Test Case
 */
class DaesUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DaesUsersTable
     */
    protected $DaesUsers;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.DaesUsers',
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
        $config = $this->getTableLocator()->exists('DaesUsers') ? [] : ['className' => DaesUsersTable::class];
        $this->DaesUsers = $this->getTableLocator()->get('DaesUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DaesUsers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DaesUsersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DaesUsersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
