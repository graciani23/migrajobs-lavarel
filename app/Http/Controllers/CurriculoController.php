<?php

namespace App\Http\Controllers;

use App\User;
use App\DetalhesCurriculo;
use Illuminate\Http\Request;

class CurriculoController extends Controller
{
    public function loginCurriculo()
    {
        $candidatos = DetalhesCurriculo::all();
        return view('curriculo', compact('candidatos'));
    }

    public function curriculoUsuario() 
    {
        return view('curriculo');
    }

    public function curriculoPost(Request $request)
    {
        $curriculo = $request->all();
        $novoCurriculo = new DetalhesCurriculo();
        $novoCurriculo -> fill($curriculo);
        $novoCurriculo -> save();
        return view('curriculo');
    }    

    public function salvarCurriculo(Request $request)
    {
        $cadidato = Curriculo::create($request->all());
        return redirect()->routes('curriculo');
    }
        

    
    
}
