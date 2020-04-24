<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidato;

class CurriculoController extends Controller
{
    public function index()
    {
        $candidatos = Candidato::all();
        return view('curriculo-index', compact('candidatos'));
    }

    public function adicionar() 
    {
        return view('curriculo');
    }

    public function salvar(Request $request)
    {
        $curriculo = $request->all();
        $novoCurriculo = new Candidato();
        $novoCurriculo->fill($curriculo);
        if($request->hasFile('image')){
            $imagem = $request->file('image');
            $num = rand(1111,9999);
            $dir = "public/assets/img";
            $ext = $imagem->guessClientExtension();
            $nomeImagem = "image_".$num.".".$ext;
            $imagem->move($dir, $nomeImagem);
            $dados['image'] = $dir."/".$nomeImagem;
        }
        Candidato::create($novoCurriculo);
        
        return view('curriculo')->with('mensagem', 'Formulario salvo!');

    }    

    }
