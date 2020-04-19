<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\CandidatoRequest;

class ImigranteController extends Controller
{
    public function cadastrarImigrante()
    {
        return view('cad-log-imigrante');
    }

    public function store(CandidatoRequest $request)
    {
        // $data = [
        //     'nome' => request('name'),
        //     'genero' => request('genero'),
        //     'senha' => request('senha'),
        //     'confsenha' => request('confSenha'),
        //     'pais' => request('paises')
        // ];

        // User::create($data);
        // dd($data);
        //dd($candidato);

        $cadidato = User::create($request->all());

        return redirect()->route('curriculo_candidato');
    }
}
