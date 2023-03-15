<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipio')->insert([
            'nome' =>"BELAS",
            'provincia_id'=>"11"
             
        ]);
        DB::table('municipio')->insert([
            'nome' =>"CACUACO",
            'provincia_id'=>"11"
             
        ]);DB::table('municipio')->insert([
            'nome' =>"CAZENGA",
            'provincia_id'=>"11"
             
        ]);DB::table('municipio')->insert([
            'nome' =>"ICOLO e BENGO",
            'provincia_id'=>"11"
             
        ]);DB::table('municipio')->insert([
            'nome' =>"LUANDA",
            'provincia_id'=>"11"
             
        ]);DB::table('municipio')->insert([
            'nome' =>"QUIÇAMA",
            'provincia_id'=>"11"
             
        ]);DB::table('municipio')->insert([
            'nome' =>"KILAMBA KIAXI",
            'provincia_id'=>"11"
             
        ]);DB::table('municipio')->insert([
            'nome' =>"TALATONA",
            'provincia_id'=>"11"
             
        ]);DB::table('municipio')->insert([
            'nome' =>"VIANA",
            'provincia_id'=>"11"
             
        ]);
       
    }
}
