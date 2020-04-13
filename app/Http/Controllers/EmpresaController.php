<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function cadastrarEmpresa() {
        return view('cad-log-empresa');
    }

}
