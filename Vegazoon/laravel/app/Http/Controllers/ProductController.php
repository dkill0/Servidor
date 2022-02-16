<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
   public function index()
   {
      $productos = DB::table('productos', 'libros', 'portatiles')
         ->havingRaw('MAX(descuento)')
         ->limit(8)
         ->groupBy('idProducto')
         ->get();
      return view('productos.index', compact('productos'));
   }
   public function portatiles()
   {
      $portatiles = DB::table('portatiles')->get();
      return view('productos.portatiles', compact('portatiles'));
   }
   public function libros()
   {
      $libros= DB::table('libros')->get();
      return view('productos.libros', compact('libros'));
   }
}
