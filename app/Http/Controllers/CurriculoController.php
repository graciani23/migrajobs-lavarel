<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidato;
use App\User;

class CurriculoController extends Controller
{
    public function create() 
    {
        return view('candidatos/curriculo');
    }

    public function store(Request $request)
    {   
        $curriculo = $request->all();
        $usuario = auth()->user();
        $usuario->fill($curriculo);
        $usuario->save();
        $novoCurriculo = new Candidato();
        $novoCurriculo->fill($curriculo);
        if($request->hasFile('image')){
            $path = $request->file('image')->store('img', 'public');
            $novoCurriculo->image = $path;
        }
        
        $novoCurriculo-> usuario_id = $usuario -> id; 
        $novoCurriculo->save();
        return redirect()->route('candidatoShow',[$novoCurriculo -> id]);
    }

    public function show(Request $request){
        $candidatos = auth()->user()->candidato;
        return view('/candidatos/candidato', compact('candidatos')); 
    }

    public function index(Request $Request)
    {
        $candidatos = auth()->user()->candidato;
        return view('candidatos/homeCandidato', compact('candidatos'));
    }

    
    public function edit() 
    {
        $candidatos = auth()->user()->candidato;
        return view('/candidatos/candidato-editar', compact('candidatos'));
    }

    public function update(Request $request){
        $candidatos = auth()->user()->candidato;
        $curriculo = $request->all();
        $candidatos->fill($curriculo);
        if($request -> hasFile ('image')){
            $path = $request->file('image')->store('img', 'public');
            $candidatos->image = $path;
        }
        $curriculo->save();
        return redirect()->route('candidatoShow', [$candidatos]);  
    }
    
    public function destroy(){
        $candidatos = auth()->user()->candidato;
        $candidatos->delete();
        return redirect()->route('index'); 
    }
    
    
    public function menuShow(Request $request, $id){
        $candidatos = Candidato::find($id);
        return view('includes.menuCurriculo', compact('candidatos')); 
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }


}
    

 
