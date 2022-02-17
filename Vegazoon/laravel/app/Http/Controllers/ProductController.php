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
}
