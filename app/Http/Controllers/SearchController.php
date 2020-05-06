<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Controllers\VagasController;
use App\Vaga;


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
        $vagas = Vaga::all();
        return view ('vagasCandidato/vagasInscritas',compact('vagas')); 
    }

    


}
