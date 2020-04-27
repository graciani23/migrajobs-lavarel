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
        $novoDado -> users_id = $user -> id; 
        $novoDado -> save();
        return redirect()->back();
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
        $dados = $req->all();
        DetalhesEmpresa::find($id)->update($dados);

        return redirect()->back();


        //return redirect('/empresa-index');
    }

    
    public function deletar($id){
        DetalhesEmpresa::find($id)->delete();
        return redirect()->route('index'); 
    }

}


/*
 //Pegando o nome original do arquivo
 $nomeOriginal = $request->file('imagem')->getClientOriginalName();
 //Montando a url necessária para acessar o arquivo corretamente
 $caminhoimg  = '/storage/img/' . $nomeOriginal;
 //Salvando apenas a imagem
 $save = $request->file('imagem')->storeAs('public/img', $nomeOriginal);
 $novoProduto->imagem = $caminhoimg;

 */