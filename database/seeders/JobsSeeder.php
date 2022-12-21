<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobsSeeder extends Seeder
{
    public function run()
    {
        $jobsData = [
            [
                'user_id' => 1,
                'job_type_id' => 1,
                'titulo' => 'Desenvolvedor PHP',
                'descricao' => 'Desenvolvo sistemas em PHP, tenho conhecimento em frameworks como Laravel e Symphony',
                'valor_hora' => '50',
            ],
            [
                'user_id' => 2,
                'job_type_id' => 1,
                'titulo' => 'Desenvolvedor PHP',
                'descricao' => 'Desenvolvo sistemas em PHP, tenho conhecimento em frameworks como Laravel e Symphony',
                'valor_hora' => '50',
            ]
        ];

        DB::table('jobs')->insert($jobsData);
    }
}
