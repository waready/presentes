<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColegiadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colegiados', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id'); //primary key 
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('nombres');
            $table->string('paterno');
            $table->string('materno');
            $table->char('dni');
            $table->char('codigoCip');

            $table->string('ultimoPago')->nullable();
            $table->string('habilHasta')->nullable();
            $table->string('especialidad')->nullable();

            //$table->timestamp('fecha');
            $table->string('nombreFoto')->nullable();
            $table->integer('estado') ->default(0);

            $table->boolean('presente')->default(false);
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
        Schema::dropIfExists('colegiados');
    }
}
