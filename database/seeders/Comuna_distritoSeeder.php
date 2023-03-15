<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Comuna_distritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comuna_distrito')->insert([
        
            'nome'=>'CACUACO',
            'municipio_id'=>"2",
            'tipo'=>"Comuna",
            
            ]);
            DB::table('comuna_distrito')->insert([
        
                'nome'=>'BELAS',
                'municipio_id'=>"1",
                'tipo'=>"Distrito",
                
                ]);
    }
}
