<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\Auth;

class AuthController extends Controller
{
    public function dashboard()
    {
        // verifica se existe usuário logado
        if(Auth::check() === true) {
            // retorna o usuário que está na sessão
            dd(Auth::user());
            return view('admin.dashboard');
        }
        return redirect()->route('admin.login');
    }

    //se não estiver logado, vai para rota index
    public function showLoginForm()
    {
        return view('admin.formLogin');
    }

    public function login(Request $request)
    {
        var_dump($request->all());

        $credenciais = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credenciais)) {
            return redirect()->route('admin');
        }
        //back volta uma URL
        return redirect()->back()->withInput()->withErrors(['Os dados informados não conferem']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin');
    }

}
