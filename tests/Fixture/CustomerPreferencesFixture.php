<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CustomerPreferencesFixture
 */
class CustomerPreferencesFixture extends TestFixture
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
                'customer_preferred_departure_date' => '2023-04-12 04:45:48',
                'customer_preferred_return_date' => '2023-04-12 04:45:48',
                'customer_preferred_season' => 'Lorem ipsum dolor sit amet',
                'customer_preferred_region' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
