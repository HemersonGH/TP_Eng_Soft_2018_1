<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Disciplina
 * @package App
 */
class Disciplina extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
    	'id',
    	'nome',
    	'id_professor',
    	'tipo_trofeu',
    	'tipo_atividade',
    ];
}
