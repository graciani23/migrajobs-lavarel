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
Route::post('/index', 'MessageController@enviarEmail');
// Route::get('/index#link-contato', 'MessageController@enviarEmail')->name('index-contato');

Route::get('/cadastro', 'CadastroController@cadastrarImigrante')->name('cadastro');
Route::post('/cadastro', 'CadastroController@store');

Route::get('/candidatos/homeCandidato', 'CurriculoController@index')->name('curriculoIndex');
Route::get('/candidatos/curriculo', 'CurriculoController@create')->name('curriculo');
Route::post('/candidatos/curriculo', 'CurriculoController@store');
Route::get('/candidatos/candidato', 'CurriculoController@show')->name('candidatoShow')->middleware('auth');
Route::get('/candidatos/candidato-editar', 'CurriculoController@edit')->name('candidatoEdit')->middleware('auth');
Route::put('/candidatos/curriculo/update', 'CurriculoController@update')->name('curriculoUpdate')->middleware('auth');
Route::get('/candidatos/curriculo/destroy', 'CurriculoController@destroy')->name('curriculoDestroy')->middleware('auth');
Route::get('/includes/menuCurriculo', 'CurriculoController@menuShow')->name('menuShow');
Route::get('/candidato/logout', 'CurriculoController@logout')->name('candidato.logout');

Route::get('/vagasCandidato/vagasEmpresa', 'SearchController@vagasPublicadas')->name('vagasPublicadas');
Route::get('/vagasCandidato/perfilVaga/{id}', 'SearchController@show')->name('showVaga');
Route::get('/vagasCandidato/vagasInscritas/', 'SearchController@vagasInscritas')->name('inscricao');

Route::get('/empresaCandidato/candidatos', 'AreaEmpresaController@showCandidato')->name('showCandidatos');
Route::get('/empresaCandidato/perfilCandidato/{id}', 'AreaEmpresaController@perfilCandidato')->name('perfilCandidato');


Route::get('/empresa-index', 'PerfilEmpresaController@index')->name('empresaIndex')->middleware('auth');
Route::get('/perfil-empresa', 'PerfilEmpresaController@adicionar')->name('perfil-empresa');
Route::post('/perfil-empresa', 'PerfilEmpresaController@adicionarSubmitPost');
Route::get('/perfil-empresa-salvar', 'PerfilEmpresaController@salvar');

Route::get('/empresa', 'PerfilEmpresaController@mostrar')->name('empresaMostrar')->middleware('auth');
Route::get('/empresa-editar', 'PerfilEmpresaController@editar')->name('empresaEditar')->middleware('auth');
Route::put('/perfil-empresa/atualizar', 'PerfilEmpresaController@atualizar')->name('empresaAtualizar')->middleware('auth');
Route::get('/perfil-empresa/deletar', 'PerfilEmpresaController@deletar')->name('empresaDeletar')->middleware('auth');
Route::get('/empresa/logout', 'PerfilEmpresaController@logout')->name('empresa.logout');



Route::get('/vaga-index', 'VagasController@index')->name('vagaIndex');
Route::get('/publicar-vagas', 'VagasController@publicar')->name('vagasPublicar');
Route::post('/publicar-vagas', 'VagasController@publicarSubmitPost');
Route::get('/publicar-vagar-salvar', 'VagasController@salvar')->name('vagasSalvar');
Route::get('/vaga/{id}', 'VagasController@mostrar')->name('vagaMostrar');
Route::get('/vaga/deletar/{id}', 'VagasController@deletar')->name('vagaDeletar');


Route::get('/index', 'AuthController@index')->name('index');
Route::get('/index/login', 'AuthController@showIndexLogin')->name('index.login');
Route::get('/admin/logout', 'AuthController@logout')->name('admin.logout');

// Route::post('/admin/login/valida', 'AuthController@login')->name('admin.login.valida');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

