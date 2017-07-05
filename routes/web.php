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

Auth::routes();

Route::get('/login', function () {
   return view('Login');
});
Route::get('/prueba', function(){
    return view('prueba');
});

Route::get('/home', 'HomeController@index')->name('home');


/*
|--------------------------------------------------------------------------
| Web Routes Json
|--------------------------------------------------------------------------
*/
Route::get('/api/Direccions', 'DireccionController@listarJson');
Route::get('/api/Departamento/{direccion}', 'DepartamentoController@listarJson');
Route::get('/api/Unidad/{departamento}', 'UnidadController@listarJson');