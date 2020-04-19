<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilEmpresaController extends Controller
{
    public function perfilEmpresa() {
        return view('perfil-empresa');
    }
}
