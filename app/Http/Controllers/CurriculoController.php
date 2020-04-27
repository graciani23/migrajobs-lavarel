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
        
        $curriculo = $request->all();
        $usuario = new User();
        $usuario->fill($curriculo);
        $usuario->save();
        $novoCurriculo = new Candidato();
        $novoCurriculo->fill($curriculo);
        $novoCurriculo->usuario_id = $usuario->id; 
        $novoCurriculo->save();
        return redirect()->back();
    }

    public function show(Request $request, $id){
        $candidatos = Candidato::find($id);
        return view ('candidato', compact('candidatos')); 
    }

    public function edit($id) 
    {
        $candidatos = Candidato::find($id);
        return view('candidato-editar', compact('candidatos'));
    }

    public function update(Request $request, $id){
        $curriculo = $request->all();
        Candidato::find($id)->update($curriculo);

        return redirect()->route('curriculoIndex');
        
    }

    public function destroy($id){
        $candidatos = Candidato::find($id)->delete();
        return redirect()->route('index'); 
    }

 
}
