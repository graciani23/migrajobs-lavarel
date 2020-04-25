<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidato;
use App\User;

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
        //dd('olá');
        $curriculo = $request->all();
        $user = new User();
        $user->fill($curriculo);
        $user->save();
        $novoCurriculo = new Candidato();
        $novoCurriculo->fill($curriculo);
        $novoCurriculo->users_id = $user->id; 
        $novoCurriculo->save();
        return redirect()->back();
       
        //return view('curriculo')->with('mensagem', 'Formulario salvo!');
    }

    public function show(Request $request, $id){
        $candidatos = Candidato::find($id);
        return view ('candidato', compact('candidatos')); 
    }


}
