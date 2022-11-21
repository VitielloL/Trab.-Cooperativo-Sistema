<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class popula_users extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'desenvolvedor',
            'email' => 'dev@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
