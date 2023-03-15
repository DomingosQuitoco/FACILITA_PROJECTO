<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComunaDistritoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comuna_distrito', function (Blueprint $table) {
            $table->id();
            $table->string("nome")->unique();
            $table->unsignedBigInteger("municipio_id")->references("id")->on("municipio");
            $table->enum("tipo",["Comuna","Distrito"]);
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
        Schema::dropIfExists('comuna_distrito');
    }
}
