<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Controllers\VagasController;
use App\Vaga;
use App\User; 
use App\Candidato;



class SearchController extends Controller
{
    public function buscarVagasUsuario() {
        return view('vagasCandidato/search');
    }

    public function vagasPublicadas() 
    {
        $vagas = Vaga::all();
        return view('vagasCandidato/vagasEmpresa', compact('vagas'));    
    }

    public function show(Request $request, $id){
        $dadosVaga = Vaga::find($id);
        return view ('vagasCandidato/perfilVaga',compact('dadosVaga')); 
    }

    public function vagasInscritas(){
        //$dados = $request->all(); 
         $vagas =  auth()->user()->candidato->vagas; 
       // $user = User::find($id);
       // $user->vaga()->attach($vagas->id);
        return view ('vagasCandidato/vagasInscritas',compact('vagas')); 
    }

    public function inscrever ($id) {
        $candidato = auth()->user()->candidato; 
        $candidato->vagas()->attach($id);
        return redirect()->route('inscricao'); 
    }



    


}
