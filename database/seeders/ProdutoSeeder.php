<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produto')->insert([
            'nome' =>"COXA",
            'codigo' =>"12",
            'sub_categoria_id'=>"1"
          
            
          
             
        ]);

        DB::table('produto')->insert([
            'nome' =>"FEBRA",
            'codigo' =>"14",
            'sub_categoria_id'=>"1"
        
             
        ]);
    }
}
