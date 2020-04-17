<?php

namespace App\Http\Controllers;

use App\Mail\MensagemRecebida;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function enviarEmail()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mensamge' => 'required|min:3'
        ]);
    Mail::to('migrajobscontato@gmail.com')->send(new MensagemRecebida);

        return 'Mensagem enviada';
    }
}
