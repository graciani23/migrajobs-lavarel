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

    public function curriculoUsuario() 
    {
        return view('curriculo');
    }

    public function adicionarCurriculoPost(Request $request)
    {
        $curriculo = $request->all();
        $novoCurriculo = new Candidato();
        $novoCurriculo->fill($request->all())->save();
        return view('curriculo')->with('mensagem', 'Formulario salvo!');

    }    

    public function salvar(Request $request)
    {
        $dados = $request->all();
        if($request->hasFile('image')){
            $imagem = $request->file('image');
            $num = rand(1111,9999);
            $dir = "public/assets/img";
            $ext = $imagem->guessClientExtension();
            $nomeImagem = "image_".$num.".".$ext;
            $imagem->move($dir, $nomeImagem);
            $dados['image'] = $dir."/".$nomeImagem;
        }

        $dados = Candidato::create($request->all());
        return redirect()->routes('curriculo');
    }
        

    
    
}
