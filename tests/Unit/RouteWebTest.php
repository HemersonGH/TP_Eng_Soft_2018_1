<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteWebTeste extends TestCase
{

	/**
     * A server response unit test
     *
     * @return void
     */
	public function testResponse(){
		$this->get('/login')->assertStatus(200);
		$this->get('/atividade/cadastrar')->assertStatus(302);
		$this->get('/ufla/')->assertStatus(404);
	}


    /**
     * A view response unit test
     *
     * @return void
     */
    public function testViews()
    {   
       	$this->get('/')->assertRedirect("login");
        $this->get('/home')->assertRedirect("login");
    }
}
