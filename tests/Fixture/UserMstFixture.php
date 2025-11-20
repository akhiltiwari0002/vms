<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserMstFixture
 */
class UserMstFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'user_mst';
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
                'username' => 'Lorem ipsum dolor ',
                'password' => 'Lorem ipsum dolor ',
                'user_type' => 1,
                'active' => 1,
                'name' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
