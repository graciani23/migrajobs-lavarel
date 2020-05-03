<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\EmpresaRequest;

class EmpresaController extends Controller
{
  
    public function cadastrarEmpresa()
    {
        return view('cad-log-empresa');
    }

    public function store(EmpresaRequest $request)
    {
        // $empresa = User::create([
        //     'nome' => request('name'),
        //     'email' => request('email'),
        //     'senha' => request('senha'),
        // ]);


        $empresa = User::create($request->all());


        return redirect()->route('cad_empresa');
    }
}
