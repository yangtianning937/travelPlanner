<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HotelDataFixture
 */
class HotelDataFixture extends TestFixture
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
                'hotel_name' => 'Lorem ipsum dolor sit amet',
                'hotel_price' => 1.5,
                'hotel_address' => 'Lorem ipsum dolor sit amet',
                'hotel_city' => 'Lorem ipsum dolor sit amet',
                'hotel_country' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
