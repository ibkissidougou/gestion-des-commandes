<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommandeController extends Controller
{
    //
    public function create(){
        return view('commandes.create');
    }
    public function modifier(){
        return view('commandes.modifier');
    }
}
