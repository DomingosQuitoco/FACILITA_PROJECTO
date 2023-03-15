<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sub_categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categoria')->insert([
            'nome' =>"CARNE BRANCA",
            'categoria_id'=>"1"
             
        ]);
        DB::table('sub_categoria')->insert([
            'nome' =>"CARNE VERMELHA",
            'categoria_id'=>"1"
             
        ]);
        DB::table('sub_categoria')->insert([
            'nome' =>"LATAS",
            'categoria_id'=>"2"
             
        ]);
        DB::table('sub_categoria')->insert([
            'nome' =>"GARRAFAS",
            'categoria_id'=>"2"
             
        ]);

    }
}
