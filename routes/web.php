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
    return view('welcome');
});

Auth::routes();

//rota que verifica se as chanadas dis controladores estão logadas
Route::group(['middleware' => 'auth'], function () {
    Route::resources([
        'material' => 'MaterialController',
        'perfil' => 'PerfilController', //Utilizando o PerfilController
        'profile' => 'UserController', //Utilizando o UserController
        
    ]);
    //rota adicional de pesquisa
    Route::post('material/search', 'MaterialController@search')->name('material.search');
    Route::get('material_enviado/{id}', 'MaterialController@index')->name('material.enviado');
    Route::get('/home', 'MaterialController@index')->name('home');

});


Route::get('download/{file}', function ($file = '') {
    return response()->download(storage_path('app/public/upload/arquivos/' . $file));
});


