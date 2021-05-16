<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    static $permissaos = [
        [
            'permissao'=>"Leitura",
            'estado' =>"on",
        ],[
            'permissao'=>"Criar",
            'estado' =>"on",
        ],[
            'permissao'=>"Editar",
            'estado' =>"on",
        ],[
            'permissao'=>"Eliminar",
            'estado' =>"on",
        ],
    ];

    public function run()
    {
        foreach(Self::$permissaos as $permissao){
            DB::table('permissaos')->insert(
                $permissao
            );
        }
    }
}