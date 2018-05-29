<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Validator;
use Auth;

class cadastroController extends Controller
{

	public function __construct()
    {
 //       $this->middleware('guest');
//        $this->middleware('auth');
    }

    public function view(){
    	return view('cadastro');
    }

    public function store(Request $request){
    	$validator = Validator::make($request->all(), [
          'name'  => 'required|max:255',
          'email' => 'required|email|unique:users',
          'password' => 'required|min:6',
          'type' => 'required',
          //'password' => 'required|confirmed|min:6',
          //'password_confirm' => 'required|same:password',
        ]);
        // If validator fails, short circut and redirect with errors
        if($validator->fails()){
          return back()
            ->withErrors($validator)
            ->withInput();
        }

    	$newUser = new User;
    	$newUser->name = $request->input('name');
    	$newUser->cpf = $request->input('cpf');
    	$newUser->nasc = $request->input('nasc');
    	$newUser->institution = $request->input('institution');
    	$newUser->email = $request->input('email');
    	$newUser->name = $request->input('name');
    
    	if($request->input('sex') == "Mulher") $newUser->sex =  'F';
    	else $newUser->sex =  'F';
    
        $newUser->type = $request->input('type');
    	$newUser->password = bcrypt($request->input('password'));
    	$newUser->save();
    	
		Auth::login($newUser);

    	return redirect()->back();
    	//return "oi";
    }

}
