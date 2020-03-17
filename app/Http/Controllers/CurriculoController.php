<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurriculoController extends Controller
{
    public function curriculoUsuario() {
        return view('curriculo');
    }
}
