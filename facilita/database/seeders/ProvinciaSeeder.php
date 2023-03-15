<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincia')->insert([
            'nome' =>"BENGO"
        ]);

        DB::table('provincia')->insert([
            'nome' =>"BENGUELA"
             
        ]);
        DB::table('provincia')->insert([
            'nome' =>"BIE"
             
        ]);

        DB::table('provincia')->insert([
            'nome' =>"CABINDA"
             
        ]);
        DB::table('provincia')->insert([
            'nome' =>"CUANDO CUBANGO"
             
        ]);
        DB::table('provincia')->insert([
            'nome' =>"CUANZA NORTE"
             
        ]);
        DB::table('provincia')->insert([
            'nome' =>"CUANZA SUL"
             
        ]);
        DB::table('provincia')->insert([
            'nome' =>"CUNENE"
             
        ]);
        DB::table('provincia')->insert([
            'nome' =>"HUAMBO"
             
        ]);
        DB::table('provincia')->insert([
        'nome' =>"HUILA"
         
    ]);

        DB::table('provincia')->insert([
        'nome' =>"LUANDA"

     ]);
         DB::table('provincia')->insert([
        'nome' =>"LUNDA NORTE"
         
    ]);
         DB::table('provincia')->insert([
        'nome' =>"LUNDA SUL"
         
    ]); 
    DB::table('provincia')->insert([
        'nome' =>"MALANGE"
         
    ]);
    DB::table('provincia')->insert([
        'nome' =>"MOXICO"
         
    ]);
    DB::table('provincia')->insert([
        'nome' =>"NAMIBE"
         
    ]);
    DB::table('provincia')->insert([
        'nome' =>"UIGE"
         
    ]);
    DB::table('provincia')->insert([
        'nome' =>"ZAIRE"
         
    ]);
     
        
    }
}
