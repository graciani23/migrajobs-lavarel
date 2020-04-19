<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VagasController extends Controller
{
    public function publicar() {
        return view('publicar-vagas');
    }
}
