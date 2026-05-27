<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed {
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void {
        $data = [
            [
                'id' => '7ffb9f9b-129d-4f4d-b216-1f72b5a84654',
                'email' => 'test@example.com',
                'password' => '$2y$10$.l9pqr0zzZR7XErUB2yv2.Mjui0RM/cCuDSTU2fvhvIxwZ7bmxXhm',  // "password"
                'first_name' => 'Tester',
                'last_name' => 'Example',
                'created' => '2020-12-31 12:34:56',
                'modified' => '2022-12-31 01:23:45',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
