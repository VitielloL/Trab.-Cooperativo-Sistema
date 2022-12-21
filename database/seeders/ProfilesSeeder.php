<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesSeeder extends Seeder
{
    public function run()
    {
        $profilesData = [
            [
                'user_id' => 1,
                'profissao' => 'Desenvolvedor Fullstack',
                'github' => 'https://github.com/VitielloL',
                'linkedin' => 'https://br.linkedin.com/lucas-vitiello-4b94b4172',
                'instagram' => 'https://www.instagram.com/vitiellolucas',
                'site' => 'https://linktr.ee/vitiellolucas',
                'cep' => '20271-020',
                'estado' => 'Rio de Janeiro',
                'cidade' => 'RJ',
                'logradouro' => 'Rua Ibituruna',
                'numero' => '108',
                'complemento' => 'Faculdade - UVA',
                'celular' => '21968834047',
                'foto' => null
            ],
            [
                'user_id' => 2,
                'profissao' => 'Desenvolvedor Back-End',
                'github' => 'https://github.com/rodbcastro',
                'linkedin' => 'https://br.linkedin.com/rodrigobragacastro',
                'instagram' => 'https://www.instagram.com/rodbcastro',
                'site' => 'https://www.google.com',
                'cep' => '20271-020',
                'estado' => 'Rio de Janeiro',
                'cidade' => 'RJ',
                'logradouro' => 'Rua Ibituruna',
                'numero' => '108',
                'complemento' => 'Faculdade - UVA',
                'celular' => '21988634087',
                'foto' => null
            ]
        ];

        DB::table('profiles')->insert($profilesData);
    }
}
