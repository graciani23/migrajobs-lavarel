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
Route::get('/index',  'IndexController@exibirIndex')->name('index');
Route::post('index', 'MessageController@enviarEmail');
Route::get('/index#link-contato', 'MessageController@enviarEmail')->name('index-contato');

Route::get('/cad-log-empresa', 'EmpresaController@cadastrarEmpresa')->name('cad_empresa');
Route::post('/cad-log-empresa', 'EmpresaController@store');

Route::get('/cad-log-imigrante', 'ImigranteController@cadastrarImigrante')->name('cad_imigrante');
Route::post('/cad-log-imigrante', 'ImigranteController@store');

Route::get('/curriculo', 'CurriculoController@curriculoUsuario');
Route::get('/search', 'SearchController@buscarVagasUsuario');
Route::get('/area_empresa', 'AreaEmpresaController@areaEmpresa');

Route::get('/empresa-index', 'PerfilEmpresaController@index');
Route::get('/perfil-empresa', 'PerfilEmpresaController@adicionar');
Route::post('/perfil-empresa', 'PerfilEmpresaController@adicionarSubmitPost');

Route::get('/perfil-empresa/salvar', 'PerfilEmpresaController@salvar');
Route::get('/perfil-empresa/editar/{id}', 'PerfilEmpresaController@editar');
Route::put('/perfil-empresa/atualizar/{id}', 'PerfilEmpresaController@atualizar');
Route::get('/perfil-empresa/deletar/{id}', 'PerfilEmpresaController@deletar');


Route::get('/publicar-vagas', 'VagasController@publicar');
