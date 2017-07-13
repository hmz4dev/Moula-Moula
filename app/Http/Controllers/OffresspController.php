<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OffresspController extends Controller
{
    public function offres()
    {
        return view('offres');
    }
}
