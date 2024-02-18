<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->id();
            $table->string('fecha');
            $table->string('hora');
            $table->integer('num_comensales');
        
            //clave foránea:
            $table->unsignedBigInteger('idMenu');
            $table->foreign('idMenu')->references('id')->on('menu');
            $table->string('nombre')->nullable(false)->default('JohnDoe');
            $table->string('idUser')->nullable(false)->default('00000');
            
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
        Schema::dropIfExists('reserva');
    }
}
