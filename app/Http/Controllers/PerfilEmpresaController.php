<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetalhesEmpresa;

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
        $novoDado = new DetalhesEmpresa();
        $novoDado -> fill($dados);
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/empresas/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagm->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }
        $novoDado -> save();
        return view('perfil-empresa');

    }

    public function mostrar(Request $req, $id){
        $registros = DetalhesEmpresa::find($id);
        return view ('empresa',compact('registros')); 
    }


    public function editar ($id){
        $registros = DetalhesEmpresa::find($id);
        $registros->save(); 
        return view('empresa-editar',compact('registros'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/empresas/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagm->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }
        DetalhesEmpresa::find($id)->update($dados);


        return redirect()->routes('empresa-index');
    }

    
    public function deletar($id){
        DetalhesEmpresa::find($id)->delete();
        return redirect()->routes('empresa-index'); 
    }

}



