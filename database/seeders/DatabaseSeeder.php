<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(popula_users::class);
        $this->call(popula_profiles::class);
        $this->call(popula_job_types::class);
        $this->call(popula_jobs::class);
    }
}
