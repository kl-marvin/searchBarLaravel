<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // retourne la vue Index du dir product
    public function index()
    {
        // on récupère 6 produits aléatoirement pour les afficher
        $products = Product::inRandomOrder()->take(6)->get();
        //dd($products);

        // on ajoute les produits avec with
        return view('product.index')->with(
            'products', $products
        );
    }
}
