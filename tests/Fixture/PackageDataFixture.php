<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PackageDataFixture
 */
class PackageDataFixture extends TestFixture
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
                'departure' => 'Lorem ipsum dolor sit amet',
                'destination' => 'Lorem ipsum dolor sit amet',
                'departure_time' => '2023-04-18 13:21:27',
                'destination_time' => '2023-04-18 13:21:27',
                'hotel_name' => 'Lorem ipsum dolor sit amet',
                'hotel_address' => 'Lorem ipsum dolor sit amet',
                'total_price' => 1.5,
            ],
        ];
        parent::init();
    }
}
