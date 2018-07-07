<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Envio
 * @package App
 */
class Envio extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
	'id_atividade_alocada',
	'id_aluno',
	'comentario',
	'status',
	'viewed',
	'answer',
    ];

    /**
     * @var string
     */
    protected $table = 'envios';
}
