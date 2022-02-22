<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\Pedidos;
use App\Models\Linea_pedido;
use App\Models\User;
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


   public function portatiles(Request $tipo)
   {
      $ordena=$tipo->input('filtro');
      switch ($ordena) {
         case '1':
            $portatiles = DB::table('productos')
               ->where('stock', '!=', '0')
               ->orderBy('marca', 'ASC')
               ->get();
            break;
         case '2':
            $portatiles = DB::table('productos')
               ->where('stock', '!=', '0')
               ->orderBy('marca', 'DESC')
               ->get();
            break;
         case '3':
            $portatiles = DB::table('productos')
               ->where('stock', '!=', '0')
               ->orderBy('modelo', 'ASC')
               ->get();
            break;
         case '4':
            $portatiles = DB::table('productos')
               ->where('stock', '!=', '0')
               ->orderBy('modelo', 'DESC')
               ->get();
            break;
         case '5':
            $portatiles = DB::table('productos')
               ->where('stock', '!=', '0')
               ->orderBy('precio', 'ASC')
               ->get();
            break;
         case '6':
            $portatiles = DB::table('productos')
               ->where('stock', '!=', '0')
               ->orderBy('precio', 'DESC')
               ->get();
            break;

         default:
         $portatiles = DB::table('productos')
         ->where('stock', '!=', '0')
         ->orderBy('precio', 'DESC')
         ->get();
            break;
      }
      
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

      if (($pedidos == "[]")) {
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


         $linea = new Linea_pedido;
         $linea->idPedido = $pedidos2->idPedido;
         $linea->idUsuario = $idUsu;
         $linea->idProducto = $idProd;
         $linea->cantidad = $cantidad->input('cantidad');
         $linea->save();
      } else {
         //$id = $pedidos->idPedido;
         $linea = new Linea_pedido;
         $linea->idPedido = 1    ;
         $linea->idUsuario = $idUsu;
         $linea->idProducto = $idProd;
         $linea->cantidad = $cantidad->input('cantidad');
         $linea->save();
      }
      return $linea;
   }



   public function carrito()
   {



      return view('productos.carrito');
   }

   public function modificaPerfil(Request $request, $idUsu)
   {
      $persona = User::findOrFail($idUsu);
      $persona->name = $request->input('name');
      $persona->dni = $request->input('dni');
      $persona->tlf = $request->input('tlf');
      $persona->email = $request->input('email');
      $persona->save();
      $id = $persona->id;


      return redirect()->route('productos.perfil', compact('id'))->with('info' . 'Producto modificado correctamente');
   }
}
