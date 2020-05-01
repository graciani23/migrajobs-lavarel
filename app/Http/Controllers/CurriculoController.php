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
        if($request->hasFile('image')){
            $path = $request->file('image')->store('img', 'public');
            $novoCurriculo->image = $path;
        }
        
        $novoCurriculo->usuario_id = $usuario->id; 
        $novoCurriculo->save();
        return redirect()->route('candidatoShow',[$novoCurriculo->id]);
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
        $candidatos = Candidato::find($id);
        $curriculo = $request->all();
        if($request -> hasFile ('image')){
            $path = $request->file('image')->store('img', 'public');
            $candidatos->image = $path;
        }
        Candidato::find($id)->update($curriculo);

        return redirect()->route('candidatoShow', [$candidatos -> id]);  
    }

    public function destroy($id){
        Candidato::find($id)->delete();
        return redirect()->route('index'); 
    }

 
}
