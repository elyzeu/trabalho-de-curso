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
            $table->string('cpf');
            $table->date('data_nascimento');
            $table->date('admissao');
            $table->string('cargo');
            $table->string('lotacao');
            $table->string('rg');
            $table->double('decreto-nomeacao');
            $table->double('matricula');
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
