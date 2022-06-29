<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DaesFixture
 */
class DaesFixture extends TestFixture
{
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
                'created' => '2022-06-29 14:04:08',
                'modified' => '2022-06-29 14:04:08',
                'poste' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
