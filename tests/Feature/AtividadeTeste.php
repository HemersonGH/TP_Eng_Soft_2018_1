<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AtividadeTeste extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    
	/**
     * A server response unit test
     *
     * @return void
     */
	public function testResponse(){
		$this->get('/')->assertStatus(200);
		$this->get('/cadastro/')->assertStatus(200);
	}


    /**
     * A view response unit test
     *
     * @return void
     */
    public function testViews()
    {   
        $this->get('/')->assertViewHas('home');
    }
}
