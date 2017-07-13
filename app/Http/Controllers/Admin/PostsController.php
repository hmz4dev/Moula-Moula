<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /*public function__construct(){
    	$this->midlleware('auth');
    }

*/

    public function index()
    {


    	return view('admin');
    }
}
