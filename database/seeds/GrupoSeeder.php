<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    static $grupos = [
        [
            'grupo' =>"R.H",
            'estado'=>"on",
        ],[
            'grupo' =>"Secretaria",
            'estado'=>"on",
        ],[
            'grupo' =>"Administrador",
            'estado'=>"on",
        ],
    ];

    public function run()
    {
        foreach(Self::$grupos as $grupo){
            DB::table('grupos')->insert(
                $grupo
            );
        }
    }
}