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

Route::get('/curriculo-index', 'CurriculoController@index')->name('curriculoIndex');
Route::get('/curriculo', 'CurriculoController@create');
Route::post('/curriculo', 'CurriculoController@store');
Route::get('/candidato/{id}', 'CurriculoController@show')->name('candidatoShow');
Route::get('/candidato-editar/{id}', 'CurriculoController@edit')->name('candidatoEdit');
Route::put('/curriculo/update/{id}', 'CurriculoController@update')->name('curriculoUpdate');
Route::get('/curriculo/delete/{id}', 'CurriculoController@delete')->name('curriculoDelete');

Route::get('/search', 'SearchController@buscarVagasUsuario');
Route::get('/area_empresa', 'AreaEmpresaController@areaEmpresa');

Route::get('/empresa-index', 'PerfilEmpresaController@index')->name('empresaIndex');
Route::get('/perfil-empresa', 'PerfilEmpresaController@adicionar');
Route::post('/perfil-empresa', 'PerfilEmpresaController@adicionarSubmitPost');
Route::get('/perfil-empresa-salvar', 'PerfilEmpresaController@salvar');

Route::get('/empresa/{id}', 'PerfilEmpresaController@mostrar')->name('empresaMostrar');
Route::get('/empresa-editar/{id}', 'PerfilEmpresaController@editar')->name('empresaEditar');
Route::put('/perfil-empresa/atualizar/{id}', 'PerfilEmpresaController@atualizar')->name('empresaAtualizar');
Route::get('/perfil-empresa/deletar/{id}', 'PerfilEmpresaController@deletar')->name('empresaDeletar');



Route::get('/publicar-vagas', 'VagasController@publicar');

Route::get('/admin', 'AuthController@dashboard')->name('admin');
Route::get('/admin/login', 'AuthController@showLoginForm')->name('admin.login');
Route::get('/admin/logout', 'AuthController@logout')->name('admin.logout');
Route::post('/admin/login/valida', 'AuthController@login')->name('admin.login.valida');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
