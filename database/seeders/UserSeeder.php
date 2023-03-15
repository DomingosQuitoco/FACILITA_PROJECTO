<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        
            'nome'=>'LPMA',
            'email'=>"an",
            'telefone'=>"299973737",
            'codigo'=>"29",
            'tipo'=>"Funcionario",
            'password'=>"3737",
            
            ]);
    }
}
