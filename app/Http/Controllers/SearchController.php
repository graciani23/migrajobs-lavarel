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

    public function vagasInscritas() {
        return view('vagasCandidato/vagasInscritas');
    }

    


}
