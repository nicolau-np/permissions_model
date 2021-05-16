<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    static $pessoas = [
        [
            'nome' => "Nicolas Cage",
            'genero' => "Masculino",
        ], [
            'nome' => "Dores Nicodemus",
            'genero' => "Femenino",
        ]
    ];

    public function run()
    {
        foreach (Self::$pessoas as $pessoa) {
            DB::table('pessoa')->insert(
                $pessoa
            );
        }
    }
}