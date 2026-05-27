<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FlightDataFixture
 */
class FlightDataFixture extends TestFixture
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
                'departure_time' => '2023-04-18 13:19:32',
                'destination_time' => '2023-04-18 13:19:32',
                'flight_price' => 1.5,
            ],
        ];
        parent::init();
    }
}
