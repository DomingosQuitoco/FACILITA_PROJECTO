<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Loja_produtoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loja_produto')->insert([
            'loja_id' =>"1",
            'produto_id' =>"1",
            'preco'=>"200",
            'quantidade'=>"1",
            'data_expiracao'=>"20/04/2023"
             
        ]);
        DB::table('loja_produto')->insert([
            'loja_id' =>"2",
            'produto_id' =>"1",
            'preco'=>"2000",
            'quantidade'=>"1",
            'data_expiracao'=>"20/04/2023"
             
        ]);
    }
}
