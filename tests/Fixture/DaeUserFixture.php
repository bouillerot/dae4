<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DaeUserFixture
 */
class DaeUserFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'dae_user';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'dae_id' => 1,
            ],
        ];
        parent::init();
    }
}
