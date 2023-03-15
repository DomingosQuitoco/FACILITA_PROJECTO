<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLojaProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loja_produto', function (Blueprint $table) {
            $table->unsignedBigInteger("loja_id")->references("id")->on("loja");
            $table->unsignedBigInteger("produto_id")->references("id")->on("produto");
            $table->double("preco");
            $table->integer("quantidade");
            $table->string("data_expiracao");
            $table->integer("estado")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loja_produto');
    }
}
