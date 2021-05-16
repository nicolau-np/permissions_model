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
            'grupos' =>"R.H",
            'estado'=>"on",
        ],[
            'grupos' =>"Secretaria",
            'estado'=>"on",
        ],[
            'grupos' =>"Administrador",
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