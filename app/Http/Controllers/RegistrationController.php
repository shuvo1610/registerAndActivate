<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class RegistrationController extends Controller
{
    public function register()
    {
    	return view('authentication.registration');
    }

    public function insert(Request $request)
    {
    	$validated = $request->validate([
	        'email' => 'required',
	        'password' => 'required|confirmed',
    ]);
    	$data = [
    		'email' => $request->email,
    		'password' => $request->password,
    		'permissions' => $request->permissions,
    		'last_login' => $request->last_login,
    		'first_name' => $request->first_name,
    		'last_name' => $request->last_name,


    	];
    $user = Sentinel::registerAndActivate($data);
    return view('authentication.registration');  


}
     public function login()
    {
        return view('authentication.login');
    }

    public function loginpost(Request $request)
    {
       $credentials = [
    'email'    => $request->email,
    'password' => $request->password,
];

               if (Sentinel::authenticate($credentials))
            {
                // User is logged in and assigned to the `$user` variable.
                echo "logged";
            }else{
                echo "string";
            }


    }


}
