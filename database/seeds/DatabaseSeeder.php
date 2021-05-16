<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PessoaSeeder::class,
            UserSeeder::class,
            PermissaoSeeder::class,
            GrupoSeeder::class,
            PrivilegioSeeder::class,
        ]);
    }
}