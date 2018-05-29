<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        if (User::isProfessor(Auth::user())) {
            return view('home')->with(['teste' => 'Você é um professor']);
        }

        else {
            return view('home')->with(['teste' => 'Você é um aluno']);
        }
    }
}
