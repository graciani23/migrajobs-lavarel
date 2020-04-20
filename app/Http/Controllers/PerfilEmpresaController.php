<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetalhesEmpresa;

class PerfilEmpresaController extends Controller
{
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
        $novoDado -> save();
        return view('perfil-empresa');

    }

    public function salvar(Request $req){
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
        
        DetalhesEmpresa::create($dados);

        return redirect()->routes('perfil-empresa/index');
    }
}
