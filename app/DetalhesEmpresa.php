<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalhesEmpresa extends Model
{
    protected $fillable = ['id','razao_social', 'cnpj', 'endereco', 'area_de_atuacao', 'imagem', 'linkedin', 'instagram','facebook', 'users_id'
    ];

}
