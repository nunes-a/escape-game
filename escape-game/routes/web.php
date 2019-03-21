<?php

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

Route::get('/main', function () {
    return view('main');
});

Route::get('/insc', function () {
    return view('insc');
});

Route::get('/jeu/{nomequipe}', function ($nomequipe=1) {
    return view('accueil')->with('nomequipe', $nomequipe);
});


// Route::get('/jeu/{nomequipe}', function () {
//     $nomequipe = request('nomequipe');
//     return view('accueil',['nomequipe' => $nomequipe]);
// });
