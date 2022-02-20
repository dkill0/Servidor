<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('idProducto'); 
            $table->integer('stock'); 
            $table->double('descuento');
            $table->string('imagen');
            $table->string('marca');
            $table->string('modelo');
            $table->string('caracteristicas');
            $table->double('precio');
            $table->timestamps();
        });

        DB::table("productos")
        ->insert([
            "stock" => "29",
            "descuento" => "16",
            "imagen" => "PortatilHP.jpg",
            "marca" => "HP",
            "modelo" => "15s-fq4027ns",
            "caracteristicas" =>"15.6'' - Intel Core i5-1155G7 - RAM: 8 GB - 512GB SSD - Intel Iris Xe Graphics",
            "precio" => '589.99',
           
        ]);
        DB::table("productos")
        ->insert([
            "stock" => "6",
            "descuento" => "12",
            "imagen" => "asus.jpg",
            "marca" => "ASUS",
            "modelo" => "X415EA-EB526",
            "caracteristicas" =>"14'' - Intel Core i5-1135G7 - RAM: 8 GB - 512 GB SSD - Intel Iris Xe Graphics",
            "precio" => '555.00',
        ]);
        DB::table("productos")
        ->insert([
            "stock" => "0",
            "descuento" => "8",
            "imagen" => "portatilGamingASUS.jpg",
            "marca" => "ASUS",
            "modelo" => "FX506HMHN016",
            "caracteristicas" =>"Intel Core i5-11400H - NVIDIA GeForce RTX 3060 - RAM: 16 GB - 512 GB SSD - 15.6''",
            "precio" => '1041',
        ]);
        DB::table("productos")
        ->insert([
            "stock" => "87",
            "descuento" => "10",
            "imagen" => "convertible.jpg",
            "marca" => "ASUS",
            "modelo" => "Chromebook Flip Z3400FT-AJ0111",
            "caracteristicas" =>"14'' - Intel Core m3-8100Y - RAM: 8 GB - 64 GB eMMC - Intel UHD Graphics 615",
            "precio" => '535.99',

        ]);
        DB::table("productos")
        ->insert([
            "stock" => "13",
            "descuento" => "12",
            "imagen" => "portatilLENOVO.jpg",
            "marca" => " LENOVO",
            "modelo" => "Legion 5 15IMH05",
            "caracteristicas" =>"Intel Core i7-10750H - NVIDIA GeForce GTX 1650 - RAM: 16 GB - 512 GB SSD PCIe - 15.6''",
            "precio" => '1099.00',
        ]);
        DB::table("productos")
        ->insert([
            "stock" => "13",
            "descuento" => '0',
            "imagen" =>'macbukapple.jpg',
            "marca" => "APPLE",
            "modelo" => "Gris Espacial - MGN73Y/A",
            "caracteristicas" => "13.3'' - Apple M1 - RAM: 8 GB - 512 GB SSD - Integrada",
            "precio" => '1185',
        ]);
        DB::table("productos")
        ->insert([
            "stock" => "69",
            "descuento" => '13',
            "imagen" =>'dynabook.jpg',
            "marca" => "DYNABOOK",
            "modelo" => "Satellite Pro C40-G-119",
            "caracteristicas" => "14'' - RAM: 8 GB - 256 GB SSD - Intel UHD Graphics",
            "precio" => '658.60',
        ]);
        DB::table("productos")
        ->insert([
            "stock" => "7",
            "descuento" => '13',
            "imagen" =>'gamingHP.jpg',
            "marca" => "HP",
            "modelo" => "Victus 16-e0002ns",
            "caracteristicas" => "AMD Ryzen 5 5600H - NVIDIA GeForce GTX 1650 - RAM: 8 GB - 512 GB SSD - 16.1''",
            "precio" => '699.99',
        ]);
        DB::table("productos")
        ->insert([
            "stock" => "34",
            "descuento" => '34',
            "imagen" =>'portatilACER.jpg',
            "marca" => "ACER",
            "modelo" => "Nitro 5 AN515-44-R8VH ",
            "caracteristicas" => "AMD Ryzen 7 4800H - NVIDIA GeForce GTX 1650 - RAM: 16 GB - 512 GB SSD - 15.6''",
            "precio" => '829.99',
        ]);
        DB::table("productos")
        ->insert([
            "stock" => "34",
            "descuento" => '2',
            "imagen" =>'coolbox.jpg',
            "marca" => "COOLBOX",
            "modelo" => "Exegon Pro",
            "caracteristicas" => "Intel Core i7-11800H - NVIDIA GeForce RTX 3050 - RAM: 16 GB - 2 TB HDD + 500 GB SSD - 17.3''",
            "precio" => '1452',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
