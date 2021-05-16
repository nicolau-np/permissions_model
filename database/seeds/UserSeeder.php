<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        DB::table('usuarios')->insert([
            array(
                'id_pessoa'=>1,
                'email'=>"nic340k@gmail.com",
                'password' =>Hash::make('olasolas'),
                'estado' =>"on",
            ),
            array(
                'id_pessoa'=>2,
                'email'=>"armindadorescatotak@gmail.com",
                'password' =>Hash::make('dorescatota'),
                'estado' =>"on",
            ),
        ]);
    }
}