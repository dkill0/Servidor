<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\Pedidos;
use App\Models\Linea_pedido;
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
      $pedidos = DB::table('pedidos')
         ->where('user', $id)
         ->get();

      return view('productos.pedidos', compact('pedidos'));
   }

   public function nuevoArticulo(Request $cantidad, $idUsu, $idProd)
   {
      $pedidos = DB::table('pedidos')
         ->where('user', $idUsu)
         ->where('enviado', '0')
         ->where('pagado', '0')
         ->get();

     if (($pedidos != "[]")) {
         $nuevoPedido = new Pedidos;
         $nuevoPedido->user = $idUsu;
         $nuevoPedido->enviado = 0;
         $nuevoPedido->pagado = 0;
         $nuevoPedido->save();

         $pedidos2 = DB::table('pedidos')
            ->where('user', $idUsu)
            ->where('enviado', '0')
            ->where('pagado', '0')
            ->get();

         $idPed = $pedidos2->idPedido;
         $linea = new Linea_pedido;
         $linea->idPedido = $idPed;
         $linea->user = $idUsu;
         $linea->idProducto = $idProd;
         $linea->cantidad = $cantidad->input('cantidad');
         $linea->save();
      } else {
         $idPed = $pedidos->idPedido;
         $linea = new Linea_pedido;
         $linea->idPedido = $idPed;
         $linea->user = $idUsu;
         $linea->idProducto = $idProd;
         $linea->cantidad = $cantidad->input('cantidad');
         $linea->save();
      }
   }


      return $idPed;
   }
   public function carrito()
   {



      return view('productos.carrito');
   }
}
