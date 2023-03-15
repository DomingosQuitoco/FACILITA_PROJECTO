<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
    
        DB::table('categoria')->insert([
            'nome' =>"FRESCOS",
            'foto' =>"",
            'seccao_id'=>"1"
             
        ]);

        DB::table('categoria')->insert([
            'nome' =>"GASOSAS",
            'foto' =>"",
            'seccao_id'=>"2"
             
        ]);
    }
    
}
