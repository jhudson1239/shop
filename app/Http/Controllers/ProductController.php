<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index(){
        $products = DB::table('product')->get();

        return view('product.index', ['products' => $products]);
    }
}
