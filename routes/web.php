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
Route::post('index', 'MessageController@enviarEmail');

Route::get('/cad-log-empresa', 'EmpresaController@cadastrarEmpresa')->name('cad_empresa');
Route::post('/cad-log-empresa', 'EmpresaController@store');

Route::get('/cad-log-imigrante', 'ImigranteController@cadastrarImigrante')->name('cad_imigrante');
Route::post('/cad-log-imigrante', 'ImigranteController@store');

Route::get('/curriculo', 'CurriculoController@curriculoUsuario')->name('curriculo_candidato');
Route::get('/search', 'SearchController@buscarVagasUsuario');
Route::get('/area_empresa', 'AreaEmpresaController@areaEmpresa');
