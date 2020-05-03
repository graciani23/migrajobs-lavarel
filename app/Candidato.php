<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $fillable = [
                            'id',
                            'name',
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
                            'month',
                            'year',
                            'job_description',
                            'instution',
                            'formation',
                            'course_description',
                            'usuario_id'


];
    
            
}
