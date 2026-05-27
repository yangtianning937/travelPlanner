<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EnquiriesFixture
 */
class EnquiriesFixture extends TestFixture
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
                'customer_name' => 'Lorem ipsum dolor sit amet',
                'customer_phoneno' => 1,
                'customer_email' => 'Lorem ipsum dolor sit amet',
                'customer_topic' => 'Lorem ipsum dolor sit amet',
                'message' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
