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
    return view('auth/login');
});
Route::get('/welcome', function () {
    return view('index');
});
Route::get('/medicaments', function () {
    return view('index');
});
Route::get('/medecins', function () {
    return view('index');
});
Route::get('/fournisseurs', function () {
    return view('index');
});
Route::get('/clients', function () {
    return view('index');
});
Route::get('/ventes', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/register', function () {
    return view('register');
});

Route::resource('medicaments', 'MedicamentsController');
Route::resource('clients', 'ClientsController');
Route::resource('fournisseurs', 'FournisseursController');
Route::resource('medecins', 'MedecinsController');
Route::resource('ventes', 'VentesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register', 'HomeController@register')->name('register');

