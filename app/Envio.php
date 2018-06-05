<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    protected $fillable = [
	'id_atividade_alocada',
	'id_aluno',
	'comentario',
	'status',
	'viewed',
	'answer',
    ];

    protected $table = 'envios';
}
