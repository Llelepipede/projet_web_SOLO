<?php

use Illuminate\Support\Facades\Route;


use App\Models\User;
use App\Models\Product;


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

    $Utilisateur = new User;
    $Utilisateur->email = request('email');
    $Utilisateur->password = request('password');
    $Utilisateur->name = request('name');
    
    return 'Formulaire recu votre mot mail est:' .request('email');
});



Route::get('/product/{id}',function() {
    $id = request('id');

    return view('product', [
        'id' => $id,
    ]);
});