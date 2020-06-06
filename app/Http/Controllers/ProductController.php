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


    public function search()
    {

        request()->validate([
            'q' => 'required|min:2'
        ]);

        // on récupère la recherche
        $q = request()->input('q');

       //dd($q);

        // recherche sur les titres des produits
       $productsResearched =  Product::where('title', 'like', "%$q%")
           ->paginate(5);


       // on passe les résultats dans la vue

        return view('product.search')->with(
               'productsResearched', $productsResearched
       );

    }
}
