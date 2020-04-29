<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetalhesEmpresa;
use App\User;

class PerfilEmpresaController extends Controller{
    public function index() {
        $registros = DetalhesEmpresa::all();
        return view('empresa-index', compact('registros'));
    }

    public function adicionar() {
        return view('perfil-empresa');
    }

    public function adicionarSubmitPost(Request $req){
        $dados = $req->all();
        $user = new User();
        $user ->fill($dados);
        $user -> save();
        $novoDado = new DetalhesEmpresa();
        $novoDado -> fill($dados);
        if($req -> hasFile ('imagem')){
            $path = $req->file('imagem')->store('img', 'public');
            $novoDado->imagem = $path;
        }
        $novoDado -> users_id = $user -> id; 
        $novoDado -> save();
        return redirect()->route('empresaMostrar', [$novoDado -> id]);
    }

    public function mostrar(Request $req, $id){
        $registros = DetalhesEmpresa::find($id);
        return view ('empresa',compact('registros')); 
    }


    public function editar ($id){
        $registros = DetalhesEmpresa::find($id);
        return view('empresa-editar',compact('registros'));
    }

    public function atualizar(Request $req, $id){
        $registros = DetalhesEmpresa::find($id);
        $dados = $req->all();
        if($req -> hasFile ('imagem')){
            $path = $req->file('imagem')->store('img', 'public');
            $registros->imagem = $path;
        }
        DetalhesEmpresa::find($id)->update($dados);
       
        return redirect()->route('empresaMostrar', [$registros -> id]);


        //return redirect('/empresa-index');
    }

    
    public function deletar($id){
        DetalhesEmpresa::find($id)->delete();
        return redirect()->route('index'); 
    }

}




 