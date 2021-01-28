<?php

use Illuminate\Support\Facades\Route;


use App\Models\User;
use App\Models\product;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {

    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});



Route::get('/inscription', function () {
    return view('inscription');
});

Route::post('/inscription', function () {


    $Utilisateur = User::create([
        'email' => request('email'),
        'password' => request('password'),
        'name' => request('name'),
        ]);
    
    return view('inscription'). 'Formulaire recu votre mot mail est:' .request('email');
});


Route::get('/addproduct', function () {
    return view('addproduct');
});

Route::post('/addproduct', function () {

    $product = product::create([
        'name' => request('name'),
        'description' => request('description'),
        'price' => request('price'),
        ]);
    return view('addproduct');
});



Route::get('/allproduct',function() {
    $produits = product::all();

    return view('allproduct', [
        'produit' => $produits,
    ]);
});

Route::get('/product/{id}',function() {
    $id = request('id');

    return view('product', [
        'id' => $id,
    ]);
});