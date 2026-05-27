<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FlightsFixture
 */
class FlightsFixture extends TestFixture
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
                'leaveFrom' => 'Lorem ipsum dolor sit amet',
                'goingTo' => 'Lorem ipsum dolor sit amet',
                'flight_departure_time' => '2023-04-18 13:19:53',
                'flight_data_id' => 1,
            ],
        ];
        parent::init();
    }
}
