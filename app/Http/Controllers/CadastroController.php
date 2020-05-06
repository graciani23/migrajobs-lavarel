<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidatoRequest;
use App\User;
use Illuminate\Http\Request;


class CadastroController extends Controller
{
    public function cadastrarImigrante(Request $request)
    {
        $candidatos = User::query()
            ->get();
        return view('cadastro');
    }

    public function store(CandidatoRequest $request)
    {

        $cadidato = User::create($request->all());

        return redirect()->route('index');
    }
}
