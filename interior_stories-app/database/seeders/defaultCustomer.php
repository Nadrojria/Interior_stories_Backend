<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class defaultCustomer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create(
            [
            'username' => 'customer',
            'email' => 'cust@test.com',
            'password' => bcrypt('password'),
            'role' => 'customer',
            ]
            );
    }

}
