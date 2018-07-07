<?php

namespace App\Http\Controllers;

use App\User;
use App\Jobs\SendVerificationEmail;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Validator;
use Auth;

/**
 * Class cadastroController
 * @package App\Http\Controllers
 */
class cadastroController extends Controller
{

    /**
     * cadastroController constructor.
     */
    public function __construct()
    {
 //       $this->middleware('guest');
//        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view(){
    	return view('cadastro');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
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
        //$newUser->email_token = base64_encode($request->input('email'));
    
    	if($request->input('sex') == "Mulher") $newUser->sex =  'F';
    	else $newUser->sex =  'M';
    
        $newUser->type = $request->input('type');
    	$newUser->password = bcrypt($request->input('password'));
    	
       /* event(new Registered($newUser));

        dispatch(new SendVerificationEmail($newUser));

        return view('verification');*/
        $newUser->save();
		Auth::login($newUser);

    	return redirect('home');
        
    	//return "oi";
    }

    /**
     * @param $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function verify($token)
    {

        $user = User::where('email_token',$token)->first();

       // $user->verified = 1;

        if($user->save()){

        return view('emailConfirm',['user'=>$user]);

        }
    }
}
