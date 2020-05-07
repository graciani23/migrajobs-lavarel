<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidato;
use User;
use App\Vaga;

class AreaEmpresaController extends Controller
{

    public function perfilCandidato(Request $request, $id){
        $candidatos = Candidato::find($id);
        return view('empresaCandidato/perfilCandidato', compact('candidatos')); 
    }

      
    public function showCandidato(){
        $candidatos = Candidato::all();
        //$candidatos = auth()->user()->vagas->candidato;
        return view('/empresaCandidato/candidatos', compact('candidatos')); 
    }

    
  //  public function candidatosInscritos () {
  //      //$candidato = auth()->user()->candidato;
  //      $vaga = auth()->user()->vaga->candidato; 
  //      return redirect()->route('inscritos'); 
  //  }
}


