<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $fillable = [ 'id', 'empresa_id', 'nome_empresa', 'area_de_atuacao','descricao','idioma_requerido','portugues','ingles','frances','espanhol','outros'
    ];

    public function empresa()
    {
        return $this->belongsTo('App\DetalhesEmpresa', 'foreign_key');
    }

    public function candidato()
    {
        return $this->hasMany('App\Candidato'); 
    }
}

