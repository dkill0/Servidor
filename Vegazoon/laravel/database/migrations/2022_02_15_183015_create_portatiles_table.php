<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortatilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portatiles', function (Blueprint $table) {
            $table->increments('idPortatil');
            $table->string('marca');
            $table->string('modelo');
            $table->string('caracteristicas');
            $table->double('precio');
            $table->foreign("idPortatil")
                    ->references("idProducto")
                    ->on("productos")
                    ->onDelete("cascade")
                    ->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portatiles');
    }
}
