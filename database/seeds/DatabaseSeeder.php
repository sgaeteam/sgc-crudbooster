<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        //$this->call(CategoriasTableSeeder::class);
        //$this->call(CobrancasTableSeeder::class);
        //$this->call(AtividadesTableSeeder::class);
        //$this->call(AreaCompetenciasTableSeeder::class);
        $this->call(EspacosTableSeeder::class);
    }
}
