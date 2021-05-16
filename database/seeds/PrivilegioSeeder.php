<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrivilegioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     static $privilegio_users = [
         [
           'id_permissao' =>1,
           'id_grupo'=>3,
           'id_usuario' =>1,
           'estado' =>"on"
         ],[
            'id_permissao' =>2,
            'id_grupo'=>3,
            'id_usuario' =>1,
            'estado' =>"on"
          ],


          [
            'id_permissao' =>1,
            'id_grupo'=>1,
            'id_usuario' =>2,
            'estado' =>"on"
          ],
     ];

    public function run()
    {
        foreach(Self::$privilegio_users as $privilegio_user){
            DB::table('privilegio_users')->insert(
                $privilegio_user
            );
        }
    }
}