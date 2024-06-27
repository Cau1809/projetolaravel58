<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $fillable = [
        'nome', 'idade', 'sexo', 'escolaridade', 'cor_favorita'
    ];
    //
}
