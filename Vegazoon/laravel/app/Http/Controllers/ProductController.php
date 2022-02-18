<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class ProductController extends Controller
{
   public function index()
   {
      $productos = DB::table('productos')
         ->where('stock', '!=', '0')
         ->havingRaw('MAX(descuento)')
         ->limit(8)
         ->groupBy('idProducto')
         ->orderBy('descuento', 'DESC')
         ->get();

         
      return view('productos.index', compact('productos'));
   }
   public function portatiles()
   {
      $portatiles = DB::table('productos')
         ->where('stock', '!=', '0')
         ->orderBy('precio', 'DESC')
         ->get();
      return view('productos.portatiles', compact('portatiles'));
   }

   public function perfilUsuario($id)
   {
      $persona = DB::table('users')
         ->where('id', $id)
         ->get();

      return view('productos.perfil', compact('persona'));
   }

   public function perfilProducto($id)
   {
      $producto = DB::table('productos')
         ->where('idProducto', $id)
         ->get();

      return view('productos.producto', compact('producto'));
   }

   public function compruebaPedido($id)
   {
      $pedido =DB::table('pedidos')
      ->where('user', $id)
      ->get();

      if($pedido.isEmpty()){
         {"Elige algun producto para comenzar tu pedido"}
      }
      return view('productos.pedidos', compact('pedido'));
   }
}
