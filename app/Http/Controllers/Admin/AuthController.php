<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Cookie;

class AuthController extends Controller
{
    /**
	* Show the application login page.
	*
	* @return \Illuminate\Http\Response
	*/

    public function getLogin()
    {
    	if(!Auth::guest())
    	{
    		return redirect()->route('admin.dashboard')->with('info','You are already logged in !!');
    	}
    	elseif(Cookie::get('auth_remember'))
    	{	
    		$user_id = Crypter::decrypt(Cookie::get('auth_remember'));
    		Auth::login($user_id);
    		return redirect()->route('admin.dashboard')->with('success','You have logged in successfully.');
    	}
    	return view('admin.auth.login');
    }

    /**
	* Show the application login page.
	*
	* @return \Illuminate\Http\Response
	*/

    public function postLogin(Request $request)
    {
        $field = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'email';
        $credentials = array($field=>$request->get('login'), 'password' => $request->get('password'),'role'=>'admin');
        if (Auth::attempt($credentials))
        {
            return redirect()->route('admin.dashboard')->with('success','You have logged in successfully.');
        }
        else
        {
            return redirect()->back()->with('error',"Invalid email or password.")->withInput($request->except('password'));
        }
    }

    /**
	* Logout from application.
	*
	* @return \Illuminate\Http\Response
	*/
    public function Logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
