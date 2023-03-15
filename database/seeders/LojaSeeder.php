<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LojaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            DB::table('loja')->insert([
                'nome' =>"SHOPRITE",
                'nif' =>"123",
                'Logotipo'=>"shoprite",
                'endereco_id'=>"1"

              
                
              
                 
            ]);
    
            DB::table('loja')->insert([
                'nome' =>"KERO",
                'nif' =>"124",
                'Logotipo'=>"kero",
                'endereco_id'=>"1"
                 
            ]);
        
    }
}
