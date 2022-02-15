<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineaPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_pedido', function (Blueprint $table) {
            $table->unsignedInteger('idPedido');
            $table->unsignedBigInteger('idUsuario');
            $table->integer('cantidad');
            $table->timestamps();
            //para poner dos claves primarias
            $table->primary(['idPedido', 'idUsuario']);
            $table->foreign("idUsuario")
                    ->references("id")
                    ->on("users")
                    ->onDelete("cascade")
                    ->onUpdate("cascade");
                    
            $table->foreign("idPedido")
                    ->references("idPedido")
                    ->on("pedidos")
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
        Schema::dropIfExists('linea_pedido');
    }
}
