<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vaga;
//use App\Http\Controllers\CurriculoController;


class VagasController extends Controller
{

    public function index() {
        $dadosVaga = Vaga::all();
        auth()->user()->empresa->vagas; 
        return view('vaga-index', compact('dadosVaga'));
    }

    public function publicar() {
        return view('publicar-vagas');
    }

    public function publicarSubmitPost(Request $req){
        $dados = $req->all();
        $novoDado = new Vaga();
        $novoDado -> fill($dados);
        $novoDado -> save();
        return redirect()->route('vagaMostrar', [$novoDado -> id]);
    } 

    public function mostrar(Request $req, $id){
        $dadosVaga = Vaga::find($id);
        return view ('vaga',compact('dadosVaga')); 
    }


    public function deletar($id){
         Vaga::find($id)->delete();
        return redirect()->back(); 
    }

    /* public function mostrarVagasCandidato(Request $req, $id){
        $dadosVaga = Vaga::find($id);
        return reditect()->route('search', compact('vagaCandidato')); 
    } */
}







