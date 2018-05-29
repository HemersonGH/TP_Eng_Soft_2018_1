<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AtividadeAlocada extends Model
{
    protected $fillable = [
    	'id',
    	'id_atividade',
    	'id_disciplina',
    	'data_entrega',
    ];
}
