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
//Route::resource('/admin/responsaveis', 'Admin\ResponsaveisController');
//Route::resource('/admin/contratos', 'Admin\ContratosController');

/*
Route::get('/teste1', function () {
    //metodo para listar responaveis do contrato   
    //$contrato = App\Contrato::find(217);
    // dd($contrato->responsaveis);
    $user = App\User::find(570);
    $valores = $user->responsaveis;

    //dd($valores);
    foreach ($valores as $value) {
        echo $contratos = $value['id_contrato'] . "<br>";
    }
});
*/
Route::get('/teste1', function () {
  
    $user = App\User::find(570);
    
   // dd($user->name);
    dd($user->meusContratos);
    
   
});





Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

    Route::resource('/usuarios', 'Admin\UsuariosController');
    Route::resource('/contratos', 'Admin\ContratosController');
    Route::get('contratos/resumo/{id}', ['as' => 'contratos.resumo', 'uses' => 'Admin\ContratosController@resumo']); //precisa passar qualquer parametro para acessar o metodo
});
/*
Route::prefix('admin')->middleware('auth')->namespace('Admin')->group(function () {
   
    Route::resource('/usuarios', 'UsuariosController');
    Route::resource('/contratos', 'ContratosController');
    Route::get('contratos/resumo', ['as'=>'contratos.resumo', 'contratos'=>'Admin\ContratosController@resumo']); //esta tipo de rota foi  implementada dentro classe criada pelo comando resource
});
*/