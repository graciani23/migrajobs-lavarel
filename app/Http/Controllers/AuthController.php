<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        // verifica se a sessão é válida
        if(Auth::check() === true) {
            if (Auth()->user()->tipo === "Empresa") {
                return redirect()->route('perfil-empresa');
            }

            return redirect()->route('curriculoIndex');
            //return redirect()->route('index');

        }
        return redirect()->route('index.login');
    }

    public function showIndexLogin()
    {
        //dd(Auth::user());
        return view('index');
    }

    // public function login(Request $request)
    // {
    //     var_dump($request->all());

    //     $credentials = [
    //         'email' => $request->email,
    //         'password' => $request->password
    //     ];

    //     //dd(Auth::attempt($credentials));

    //     //se os dados foram validados
    //     if(Auth::attempt($credentials)){
    //         return redirect()->route('admin');
    //     }
    //     return redirect()->back()->withInput()->withErrors(['Os dados encontrados não conferem']);
    // }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
