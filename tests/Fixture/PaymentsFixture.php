<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PaymentsFixture
 */
class PaymentsFixture extends TestFixture
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
                'payment_type' => 'Lorem ipsum dolor sit amet',
                'payment_account' => 'Lorem ipsum dolor sit amet',
                'payment_date' => '2023-04-12 04:47:09',
                'payment_amount' => 1.5,
            ],
        ];
        parent::init();
    }
}
