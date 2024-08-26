<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //

    public function create(){
        return view('clients.create');
    }

    public function modifier(){
        return view('clients.modifier');
    }
    public function liste(){
        return view('clients.liste');
    }
}
