<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobTypesSeeder extends Seeder
{
    public function run()
    {
        $jobTypesData = [
            [
                'nome' => 'Desenvolvedor'
            ],
            [
                'nome' => 'Mecanico'
            ],
            [
                'nome' => 'Pintor'
            ],
            [
                'nome' => 'Marceneiro'
            ]
        ];

        DB::table('job_types')->insert($jobTypesData);
    }
}
