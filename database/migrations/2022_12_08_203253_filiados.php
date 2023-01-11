<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('filiados', function(Blueprint $table){
            $table->id();
            $table->string('nome');
            $table->text('cpf');
            $table->text('data_nascimento');
            $table->text('admissao');
            $table->string('cargo');
            $table->string('lotacao');
            $table->string('rg');
            $table->text('decreto_de_nomeacao');
            $table->text('matricula');
            $table->string('email');
            $table->boolean('status');
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
        //
        Schema::dropIfExists('filiados');
    }
};
