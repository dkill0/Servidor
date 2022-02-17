<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
   public function index()
   {
      $productos = DB::table('productos')
         ->havingRaw('MAX(descuento)')
         ->limit(8)
         ->groupBy('idProducto')
         ->get();
      return view('productos.index', compact('productos'));
   }
}
