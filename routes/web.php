<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CommandeController;

Route::get('/', function () {
    return view('welcome');
});

//Les routes de la fenetre client 

//Pour afficher la fenetre enregistrement
Route::get('create/client',[ClientController::class, 'create'])->name('create.client');
Route::get('modifier/client',[ClientController::class,'modifier'])->name('modifier.client');
Route::get('liste/client',[ClientController::class,'liste'])->name('liste.client');

//Pour afficher la fenetre enregistrement des produits
Route::get('create/produit',[ProduitController::class,'create'])->name('create.produit');
Route::get('modifier/produit',[ProduitController::class,'modifier'])->name('modifier.produit');
Route::get('modifier/liste',[ProduitController::class,'liste'])->name('liste.produit');

//Pour afficher la fenetre de commandes
Route::get('create/commande',[CommandeController::class,'create'])->name('create.commande');
Route::get('modifier/commande',[CommandeController::class,'modifier'])->name('modifier.commande');