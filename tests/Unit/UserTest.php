<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class UserTest extends TestCase
{
    /**
     * A isProfessor user method unit test
     *
     * @return void
     */
    public function testIsProfessor()
    {
    	# Aluno
    	$gabriel = new User();
    	$gabriel->type = '0';

    	# Professor
    	$renata = new User();
    	$renata->type = '1';

        $this->assertEquals($gabriel->isProfessor($gabriel), false);
        $this->assertEquals($renata->isProfessor($renata), true);
    }
}
