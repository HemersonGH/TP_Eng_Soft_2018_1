<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Aluno
 * @package App
 */
class Aluno extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
    	'id_disciplina',
    	'id_usuario',
    ];
}
