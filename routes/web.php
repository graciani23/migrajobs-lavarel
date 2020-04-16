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

Route::get('/',  'IndexController@exibirIndex');
Route::get('/index',  'IndexController@exibirIndex');
Route::get('/cad-log-empresa', 'EmpresaController@cadastrarEmpresa');
Route::get('/cad-log-imigrante', 'ImigranteController@cadastrarImigrante');
Route::get('/curriculo', 'CurriculoController@curriculoUsuario');
Route::get('/search', 'SearchController@buscarVagasUsuario');
Route::get('/area_empresa', 'AreaEmpresaController@areaEmpresa');
Route::get('/send-mail', 'IndexController@enviarEmail');
