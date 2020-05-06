<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidato;
use User;

class AreaEmpresaController extends Controller
{

    public function perfilCandidato(Request $request, $id){
        $candidatos = Candidato::find($id);
        return view('empresaCandidato/perfilCandidato', compact('candidatos')); 
    }


    public function showCandidato(Request $request){
        $candidatos = Candidato::all();
        $candidatos = auth()->user()->candidato;
        return view('/empresaCandidato/candidatos', compact('candidatos')); 
    }

    

    

}
