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

    public function create() 
    {
        return view('curriculo');
    }

    public function store(Request $request)
    {
        $curriculo = $request->all();
        $novoCurriculo = new Candidato();
        $novoCurriculo->fill($curriculo);
        
        Candidato::create($novoCurriculo);
        //dd($novoCurriculo);

        return view('curriculo')->with('mensagem', 'Formulario salvo!');

    }    

    }
