<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $usersData = [
            [
                'name' => 'Lucas Vitiello',
                'email' => 'lucas@gmail.com',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Rodrigo Castro',
                'email' => 'rodrigobragacastro@hotmail.com',
                'password' => bcrypt('123456')
            ]
        ];

        DB::table('users')->insert($usersData);
    }
}
