<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class popula_jobs extends Seeder
{
    public function run()
    {
        DB::table('jobs')->insert([
            'user_id' => 1,
            'job_type_id' => 1,
            'titulo' => 'teste',
            'descricao' => 'teste',
            'valor_hora' => 10,
        ]);
    }
}
