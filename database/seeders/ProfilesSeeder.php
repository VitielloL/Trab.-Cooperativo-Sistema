<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesSeeder extends Seeder
{
    public function run()
    {
        DB::table('profiles')->insert([
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
            'complemento' => 'casa 2',
            'celular' => '21968834048',
            'foto' => null
        ]);
    }
}
