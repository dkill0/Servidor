<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
   public function index(){
    return view('productos.index');
   }
   public function portatiles(){
    return view('productos.portatiles');
   }
   public function libros(){
    return view('productos.libros');
   }
}
