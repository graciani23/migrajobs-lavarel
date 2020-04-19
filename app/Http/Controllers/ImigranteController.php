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

        $cadidato = User::create($request->all());

        return redirect()->route('index');
    }
}
