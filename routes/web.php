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
Route::get('/admin', function () {
 

    
    return view('admin.index');
});
Route::get('/colaborador', function () {
    
  
    
    return view('admin.colaboradores.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/usuarios', 'Admin\UsuariosController');
Route::resource('/admin/colaboradores', 'Admin\ColaboradoresControllher');
Route::resource('/admin/responsaveis', 'Admin\ResponsaveisController');
Route::resource('/admin/contratos', 'Admin\ContratosController');

Route::prefix('admin')->middleware('auth')->namespace('Admin')->group(function () {
   
    Route::resource('/usuarios', 'UsuariosController');
});

