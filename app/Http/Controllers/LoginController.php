<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('forms.login');
    }
    public function login(Request $request){
        return redirect('/period/5');
    }
}
