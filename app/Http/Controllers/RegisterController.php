<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('forms.register');
    }
    public function register(Request $request){
        return redirect('forms/login');
    }
}
