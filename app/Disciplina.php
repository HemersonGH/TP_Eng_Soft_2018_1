<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $fillable = [
    	'id',
    	'nome',
    	'id_professor',
    	'tipo_trofeu',
    	'tipo_atividade',
    ];
}
