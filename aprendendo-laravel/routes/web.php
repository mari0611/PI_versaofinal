<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/obras', 'ProdutosController@obras')->name('obras');

Route::get('/quem', 'ProdutosController@quem_somos')->name('quem_somos');

Route::get('/users', 'ProdutosController@cadastro')->name('cadastro');


Route::get('/produto', 'ProdutosController@produto')->name('produto');

Route::get('/artistas', 'ProdutosController@artistas')->name('artistas');