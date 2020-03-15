<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImigranteController extends Controller
{
    public function cadastrarImigrante() {
        return view('cad-log-imigrante');
    }
}
