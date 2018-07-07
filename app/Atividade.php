<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class atividades é utilizada para
 * Class Atividade
 * @package App
 */
class Atividade extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
    	'id',
    	'nome',
    	'descricao',
    ];

}

