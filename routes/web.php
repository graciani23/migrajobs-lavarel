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

Route::get('/candidatos/curriculo-index', 'CurriculoController@index')->name('curriculoIndex');
Route::get('/candidatos/curriculo', 'CurriculoController@create')->name('curriculo');
Route::post('/candidatos/curriculo', 'CurriculoController@store');
Route::get('/candidatos/candidato/{id}', 'CurriculoController@show')->name('candidatoShow');
Route::get('/candidatos/candidato-editar/{id}', 'CurriculoController@edit')->name('candidatoEdit');
Route::put('/candidatos/curriculo/update/{id}', 'CurriculoController@update')->name('curriculoUpdate');
Route::get('/candidatos/curriculo/destroy/{id}', 'CurriculoController@destroy')->name('curriculoDestroy');

Route::get('/candidatos/homeCandidato/{id}', 'CurriculoController@homeShow')->name('homeCandidatoShow');
Route::get('/includes/menuCurriculo/{id}', 'CurriculoController@menuShow')->name('menuShow');
//Route::get('/index/logout', 'CurriculoController@logout')->name('index.logout');
//Route::get('search/{id}', 'CurriculoController@vagaShow')->name('vagaShow');

Route::get('/vagasCandidato/search', 'SearchController@buscarVagasUsuario')->name('searchVagas');
Route::get('/vagasCandidato/vagasInscritas', 'SearchController@vagasInscritas')->name('vagasInscritas');

Route::get('/empresaCandidato/area_empresa', 'AreaEmpresaController@areaEmpresa')->name('areaEmpresa');
Route::get('/empresaCandidato/perfilCandidato', 'AreaEmpresaController@perfilCandidato')->name('perfilCandidato');

Route::get('/empresa-index/{id}', 'PerfilEmpresaController@index')->name('empresaIndex');
Route::get('/perfil-empresa', 'PerfilEmpresaController@adicionar')->name('perfil-empresa');
Route::post('/perfil-empresa', 'PerfilEmpresaController@adicionarSubmitPost');
Route::get('/perfil-empresa-salvar', 'PerfilEmpresaController@salvar');

Route::get('/empresa/{id}', 'PerfilEmpresaController@mostrar')->name('empresaMostrar');
Route::get('/empresa-editar/{id}', 'PerfilEmpresaController@editar')->name('empresaEditar');
Route::put('/perfil-empresa/atualizar/{id}', 'PerfilEmpresaController@atualizar')->name('empresaAtualizar');
Route::get('/perfil-empresa/deletar/{id}', 'PerfilEmpresaController@deletar')->name('empresaDeletar');



Route::get('/vaga-index', 'VagasController@index')->name('vagaIndex');
Route::get('/publicar-vagas', 'VagasController@publicar')->name('vagasPublicar');
Route::post('/publicar-vagas', 'VagasController@publicarSubmitPost');
Route::get('/publicar-vagar-salvar', 'VagasController@salvar')->name('vagasSalvar');
Route::get('/vaga/{id}', 'VagasController@mostrar')->name('vagaMostrar');
Route::get('/vaga/deletar/{id}', 'VagasController@deletar')->name('vagaDeletar');
//Route::get('/search/{id}', 'VagasController@mostrarVagasCandidato')->name('vagaCandidato');

Route::get('/index', 'AuthController@index')->name('index');
Route::get('/index/login', 'AuthController@showIndexLogin')->name('index.login');
Route::get('/admin/logout', 'AuthController@logout')->name('admin.logout');

Route::post('/admin/login/valida', 'AuthController@login')->name('admin.login.valida');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

