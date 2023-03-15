<?php

namespace Database\Seeders;

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
            ProvinciaSeeder::class,
            SeccaoSeeder::class,
            CategoriaSeeder::class,
            ProdutoSeeder::class,
            LojaSeeder::class,
            Loja_produtoSeeder::class,
            MunicipioSeeder::class,
            Sub_categoriaSeeder::class,
            EnderecoSeeder::class,
            Comuna_distritoSeeder::class,
            UserSeeder::class
           
        ]);
    }
}
