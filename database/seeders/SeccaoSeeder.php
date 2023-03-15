<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeccaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seccao')->insert([
            'nome' =>"ALIMENTOS",
            'foto' =>"",
             
        ]);

        DB::table('seccao')->insert([
            'nome' =>"BEBIDAS",
            'foto' =>"",
             
        ]);
    }
}
