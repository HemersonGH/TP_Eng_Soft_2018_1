<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use DB;

class DbTest extends TestCase
{
    /**
     * A basic db/model data consistence.
     *
     * @return void
     */
    public function testUserModel() {	
    	
    	# Cria um novo usuário na model User
    	$newUser = new User;
    	$newUser->name = 'José';
    	$newUser->cpf = '01356997855';
    	$newUser->nasc = '2018-07-02';
    	$newUser->institution = 'UFLA';
    	$newUser->email = 'josedeabreudesilva@gmail.com';
    	$newUser->sex =  'M';
        $newUser->type = '0';
    	$newUser->password = bcrypt('minhasenha123');

    	# Salva o usuário no DB
        $newUser->save();

        # Consulta o usuário no DB
        $query = DB::select('SELECT name FROM users WHERE cpf="01356997855"');

        DB::statement('DELETE FROM users WHERE cpf="01356997855"');

        $this->assertEquals($query[0]->name, "José");

    }
}
