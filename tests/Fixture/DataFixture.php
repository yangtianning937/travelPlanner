<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DataFixture
 */
class DataFixture extends TestFixture
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
                'flight_price' => 1,
                'departure_time' => '2023-04-18 12:43:11',
                'destination_time' => '2023-04-18 12:43:11',
                'hotel_name' => 'Lorem ipsum dolor sit amet',
                'hotel_price' => 1.5,
                'hotel_address' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
