<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
   return view ('enregist');
    }

    public function stor()
    {
      //validation the form
    	$this->validate(request(),[
               'name'=>  'required',
               'email' =>  'required',
               'password'=>  'required'
    		]);

    //create and save user
    $user $User::create(request(['name','email','password']));

    //sign them in
    auth()->login($user);

    //redirect to the home page
    return redirect()->welcome();	

    }
}
