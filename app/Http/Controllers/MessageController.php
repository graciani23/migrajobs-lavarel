<?php

namespace App\Http\Controllers;

use App\Mail\MensagemRecebida;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function enviarEmail()
    {
        $mensagem = request()->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'mensagem' => 'required|min:3'
        ]);

        Mail::to('migrajobscontato@gmail.com')->send(new MensagemRecebida($mensagem));


        return response()->json(['success' => 'Mensagem enviada!']);

    }
}
