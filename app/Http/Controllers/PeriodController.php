<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeriodController extends Controller
{
    public function period(Request $request){
        return view('blog.period');
    }
}
