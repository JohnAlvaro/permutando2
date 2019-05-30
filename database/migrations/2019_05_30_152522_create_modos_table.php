<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('modo')->nullable();

            $table->integer('inmueble_id')->unsigned()->nullable();
            $table->foreign('inmueble_id')
                  ->references('id')
                  ->on('inmuebles')
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
        Schema::dropIfExists('modos');
    }
}
