<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // retourne la vue Index du dir product
    public function index()
    {
        return view('product.index');
    }
}
