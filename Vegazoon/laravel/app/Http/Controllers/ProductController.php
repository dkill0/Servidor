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
      $ordena = $tipo->input('filtro');
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

   public function compruebaPedido()
   {

      $id = auth()->user()->id;
      $idPedido = DB::table('pedidos')
         ->where('user', $id)
         ->get();
        
      
      $pedidosFin = DB::table('pedidos')
         ->join('linea_pedidos', 'pedidos.idPedido', '=', 'linea_pedidos.idPedido')
         ->join('productos', 'linea_pedidos.idProducto', '=', 'productos.idProducto')
         ->where('pagado', 1)
         ->where('user', $id)
   

         ->get();
        // return $pedidosFin;
     
      //return $pedidosFin;

      $pedidosPend = DB::table('pedidos')
         ->join('linea_pedidos', 'pedidos.idPedido', '=', 'linea_pedidos.idPedido')
         ->join('productos', 'linea_pedidos.idProducto', '=', 'productos.idProducto')
         ->where('user', $id)
         ->where('pagado', 0)
   
         ->get();
      $total = linea_pedido::selectRaw('SUM(precio*cantidad) as total')
         ->join('pedidos', 'linea_pedidos.idPedido', '=', 'pedidos.idPedido')
         ->join('productos', 'linea_pedidos.idProducto', '=', 'productos.idProducto')
         ->where('user', $id)
   
         ->get();

      return view('productos.pedidos', compact('idPedido', 'pedidosFin', 'pedidosPend', 'total'));
   }


   public function nuevoArticulo(Request $request, $idUser, $idProd)
   {
      $pedidos = DB::table('pedidos')
         ->where('user', $idUser)
         ->where('pagado', '0')
         ->get();


      if (($pedidos == "[]")) {
         $nuevoPedido = new Pedidos;
         $nuevoPedido->user = $idUser;
         $nuevoPedido->enviado = 0;
         $nuevoPedido->pagado = 0;
         $nuevoPedido->save();

         $pedidos2 = DB::table('pedidos')
            ->where('user', $idUser)
            ->where('pagado', '0')
            ->get();

         $id = $pedidos2->first()->idPedido;
         $linea = new Linea_pedido;
         $linea->idPedido = $id;
         $linea->idUsuario = $idUser;
         $linea->idProducto = $idProd;
         $linea->cantidad = $request->input('cantidad');
         $linea->save();
      } else {
         $id = $pedidos->first()->idPedido;
         $linea = new Linea_pedido;
         $linea->idPedido = $id;
         $linea->idUsuario = $idUser;
         $linea->idProducto = $idProd;
         $linea->cantidad = $request->input('cantidad');
         $linea->save();
      }

      return redirect()->route('productos.carrito');
   }



   public function carrito()
   {
      $idUser = auth()->user()->id;
      $idPedido = DB::table('pedidos')
         ->where('user', $idUser)
         ->where('pagado', '0')
         ->get();

      $pedido = "";
      $total = "";
      if ($idPedido != '[]') {

         $pedido = DB::table('linea_pedidos')
            ->join('pedidos', 'linea_pedidos.idPedido', '=', 'pedidos.idPedido')
            ->join('productos', 'linea_pedidos.idProducto', '=', 'productos.idProducto')
            ->where('pedidos.idPedido', $idPedido->first()->idPedido)
            ->get();
         $total = linea_pedido::selectRaw('SUM(precio*cantidad) as total')
            ->join('pedidos', 'linea_pedidos.idPedido', '=', 'pedidos.idPedido')
            ->join('productos', 'linea_pedidos.idProducto', '=', 'productos.idProducto')
            ->where('pedidos.idPedido', $idPedido->first()->idPedido)
            ->get();
      }


      return view('productos.carrito', compact('pedido', 'idPedido', 'total'));
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

   public function pagoPedido()
   {
      $idUser = auth()->user()->id;
      $idPedido = DB::table('pedidos')
         ->where('user', $idUser)
         ->where('pagado', '0')
         ->get();
      $pagar = DB::table('pedidos')
         ->where('user', $idUser)
         ->where('idPedido', $idPedido->first()->idPedido)
         ->update(['pagado' => 1]);



      return redirect()->route('productos.compruebaPedido', compact('pagar'));
   }
}
