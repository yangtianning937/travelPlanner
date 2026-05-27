<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReservationsFixture
 */
class ReservationsFixture extends TestFixture
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
                'customer_id' => 1,
                'flight_id' => 1,
                'hotel_id' => 1,
                'service_id' => 1,
                'package_id' => 1,
                'reservation_type' => 'Lorem ipsum dolor sit amet',
                'trip_duration' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
