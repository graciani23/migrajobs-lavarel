<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $fillable = [
                            'id',
                            'name',
                            'surname',
                            'nationality',
                            'about_you',
                            'birth',
                            'age',
                            'genre',
                            'feminino',
                            'masculino',
                            'status',
                            'document',
                            'zip_code',
                            'city',
                            'uf', 
                            'adress',
                            'number',
                            'complement',
                            'telephone',
                            'cell_phone',
                            'linkedin',
                            'instagram',
                            'facebook',
                            'professional_goal',
                            'areas',
                            'professional_experience',
                            'company',
                            'job_role',
                            'date_inicio',
                            'date_termino',
                            'data_inicio',
                            'data_termino',
                            'job_description',
                            'instution',
                            'formation',
                            'course_description',
                            'usuario_id'


];
    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key');
    }

    public function vagas(){
        return $this->belongsToMany('App\Vaga');
    }
    
            
}
