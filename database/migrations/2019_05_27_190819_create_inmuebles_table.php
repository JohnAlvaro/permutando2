<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('area')->nullable();
            $table->string('habitaciones')->nullable();
            $table->string('banos')->nullable();
            $table->boolean('balcon')->nullable();
            $table->boolean('terraza')->nullable();
            $table->boolean('parqueadero')->nullable();
            $table->string('porteria')->nullable();
            $table->text('caracteristicas')->nullable();
            $table->string('valor')->nullable();
            $table->string('mas_informacion')->nullable();

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('inmuebles');
    }
}
