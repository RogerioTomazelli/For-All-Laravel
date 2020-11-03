<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material', function (Blueprint $table) {
            $table->id();
            $table->string("nome",150);
            $table->string("autor",150);
            $table->text("descricao",50)->nullable(); //nullable permite que salve valor nullo
            $table->string("tipo",50);
            $table->string("foto",150)->nullable();
            $table->string("licenca",20)->nullable();
            $table->string("avaliacao_positiva",20)->nullable();
            $table->string("avaliacao_negativa",20)->nullable();
            $table->string("nome_arquivo",150)->nullable();
            $table->string("extensao",150)->nullable();
            $table->unsignedBigInteger('usuario_id')->nullable();//chave estrangeira
            $table->foreign('usuario_id')->references('id')->on('users');//criando a chave estrangeira
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
        Schema::dropIfExists('material');
    }
}
