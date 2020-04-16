<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function exibirIndex() {
        return view('index');
    }

    public function enviarEmail() {
        return view('send-mail');
    }
}
