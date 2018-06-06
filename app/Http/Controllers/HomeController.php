<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;
use DB;

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
            $user = Auth::user();
            $envios = DB::select('SELECT e.*
                                 FROM disciplinas AS d, users AS u, atividades_alocadas AS a, envios AS e 
                                 WHERE u.id = '. $user->id .' and u.id = d.id_professor and d.id = a.id_disciplina and a.id = e.id_atividade_alocada and e.status = "não avaliado";');
            return view('home')->with(['type' => 'professor', 'envios' => count($envios)]);
        }

        else {
            return view('home')->with(['type' => 'aluno']);
        }
    }
}
