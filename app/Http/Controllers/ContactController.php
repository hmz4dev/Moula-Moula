<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    public function newContact(){
    	$newContact=new Contact();

    	$newContact->name="Hamza CHEKROUN";
    	$newContact->email="hmz4dev@gmail.com";
    	$newContact->message="Welcome to my first message";

    	$newContact->save();
    }

    public function listContacts(){

    	$contacts =Contact::all();

return view('contact',['contacts'=>$contacts]) ;
   }
   public function contactUs()
   {
	   return view('contactus');
   }
}
