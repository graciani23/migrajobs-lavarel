<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $fillable = [
                            'image',
                            'name',
                            'nationality',
                            'about-you',
                            'birth',
                            'age',
                            'genre-female',
                            'genre-male',
                            'status',
                            'document',
                            'zip-code',
                            'city',
                            'uf', 
                            'adress',
                            'number',
                            'complement',
                            'email',
                            'telephone',
                            'cell-phone',
                            'linkedin',
                            'instagram',
                            'facebook',
                            'professional-goal',
                            'areas',
                            'professional-experience',
                            'company',
                            'job-role',
                            'month',
                            'year',
                            'job-description',
                            'instution',
                            'formation',
                            'course-description'

];
    
            
}
