<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalhesEmpresa extends Model
{
    protected $fillable = ['id','razao_social', 'cnpj', 'endereco', 'area_de_atuacao', 'linkedin', 'instagram','facebook', 'users_id', 'cep', 'city', 'uf','rua','numero','complemento'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key');
    }
}
