<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
    	'id_disciplina',
    	'id_usuario',
    ];
}
