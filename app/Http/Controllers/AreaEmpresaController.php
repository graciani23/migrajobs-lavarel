<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaEmpresaController extends Controller
{
    public function areaEmpresa()
    {
        return view('empresaCandidato/area_empresa');
    }

    public function perfilCandidato()
    {
        return view('empresaCandidato/perfilCandidato');
    }
}
