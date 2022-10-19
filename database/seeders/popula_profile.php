<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class popula_profile extends Seeder
{
    public function run()
    {
        DB::table('profile')->insert([
            'user_id' => 1,
            'profissao' => 'Dev Fullstack',
            'github' => 'https://github.com/',
            'linkedin' => 'https://br.linkedin.com/',
            'instagram' => 'https://www.instagram.com/',
            'site' => 'https://www.google.com/',
            'cep' => '20271-020',
            'estado' => 'Rio de Janeiro',
            'cidade' => 'RJ',
            'logradouro' => 'Rua Ibituruna',
            'numero' => '108',
            'complemento' => null,
            'foto' => 'https://upload.wikimedia.org/wikipedia/commons/a/a8/Bill_Gates_2017_%28cropped%29.jpg'
        ]);
    }
}
