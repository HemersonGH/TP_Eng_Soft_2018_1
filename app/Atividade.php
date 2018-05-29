<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    protected $fillable = [
    	'id',
    	'nome',
    	'descricao',
    ];

}

