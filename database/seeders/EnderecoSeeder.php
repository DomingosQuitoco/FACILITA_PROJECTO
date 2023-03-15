<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('endereco')->insert([
        
        'rua'=>'A1',
        'bairro'=>"Boa Esperanca",
        'latitude'=>"24",
        'longitude'=>"34",
        'comuna_distrito_id'=>"1",
        ]);
        DB::table('endereco')->insert([
            
        'rua'=>'A7',
        'bairro'=>"Kilamba",
        'latitude'=>"24",
        'longitude'=>"34",
        'comuna_distrito_id'=>"2",
        ]);
        
    }
}
