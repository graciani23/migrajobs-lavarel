<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetalhesEmpresa;
use App\User;

class PerfilEmpresaController extends Controller{
 
    public function adicionar() {
        return view('perfil-empresa');
    }

    public function adicionarSubmitPost(Request $req){
        $dados = $req->all();
        $user = auth()->user();
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
        return redirect()->route('empresaIndex', [$novoDado -> id]);
    }


    public function mostrar(Request $req){
        $registros = auth()->user()->empresa;
        //dd(auth()->user()->empresa);
        return view ('empresa',compact('registros')); 
    }

    public function index(Request $req, $id) {
        $registros = DetalhesEmpresa::find($id);
    
        return view('empresa-index', compact('registros'));
    }


    public function editar ($id){
        $registros = DetalhesEmpresa::find($id);
        return view('empresa-editar',compact('registros'));
    }

    public function atualizar(Request $req, $id){
        $registros = DetalhesEmpresa::find($id);
        $dados = $req->all();
        $registros ->fill ($dados); 
        if($req -> hasFile ('imagem')){
            $path = $req->file('imagem')->store('img', 'public');
            $registros->imagem = $path;
        }
        $registros -> save(); 
        return redirect()->route('empresaMostrar', [$registros -> id]);


        //return redirect('/empresa-index');
    }

    
    public function deletar($id){
        DetalhesEmpresa::find($id)->delete();
        return redirect()->route('index'); 
    }

}




 