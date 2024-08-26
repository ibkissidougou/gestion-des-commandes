<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    //

    public function create(){
        return view('produits.create');
    }
    public function modifier(){
        return view('produits.modifier');
    }
    public function liste(){
        return view('produits.liste');
    }
}
