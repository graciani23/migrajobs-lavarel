<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $fillable = [ 'id', 'empresa_id', 'area_de_atuacao','descricao','idioma_requerido','portugues','ingles','frances','espanhol','outros'
    ];
}
