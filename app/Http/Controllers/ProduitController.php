<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    public function getAll(){
        $variable = Produit::All();
        return $variable;
    }

    public function insert(Request $request){
        $produit = new Produit();
        $produit->nom = $request->nom;
        $produit->coment = $request->coment;
        $produit->image = $request->image;
        $produit->prix = $request->prix;
        $produit->save();

      return "okay";
    }
}
