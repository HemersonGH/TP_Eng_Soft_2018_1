<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{

    protected $table = "testezinhos";

    protected $primaryKey = 'idade';

    public $incrementing = false;

    public $timestamps = false;


    protected $fillable = [
	'nome',
	'sobrenome',
	'idade'
    ];


}
