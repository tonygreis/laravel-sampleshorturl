<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultPagesController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function contact()
    {
        return view('contact');
    }
    public function disclaimer()
    {
        return view('disclaimer');
    }
    public function terms()
    {
        return view('terms');
    }
}
