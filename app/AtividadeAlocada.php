<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AtividadeAlocada
 * @package App
 */
class AtividadeAlocada extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
    	'id',
    	'id_atividade',
    	'id_disciplina',
    	'data_entrega',
    	'status',
    ];

    protected $table = 'atividades_alocadas';
}
