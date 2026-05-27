<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CustomerFixture
 */
class CustomerFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'customer';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'customer_id' => '96b64042-8274-4410-a209-b3631badb33b',
                'customer_fname' => 'Lorem ipsum dolor sit amet',
                'customer_lname' => 'Lorem ipsum dolor sit amet',
                'customer_adr' => 'Lorem ipsum dolor sit amet',
                'customer_email' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
