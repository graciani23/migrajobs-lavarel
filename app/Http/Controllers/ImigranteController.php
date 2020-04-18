<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\CandidatoRequest;
use Illuminate\Http\Request;

class ImigranteController extends Controller
{
    public function cadastrarImigrante()
    {
        return view('cad-log-imigrante');
    }

    public function store(CandidatoRequest $request)
    {
        $data = [
            'nome' => request('name'),
            'genero' => request('genero'),
            'senha' => request('senha'),
            'confsenha' => request('confSenha'),
            'pais' => request('paises')
        ];

        User::create($data);
        dd($data);
        //dd($candidato);

        return "Candidato criado com sucesso!";
    }
}
