<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
}
