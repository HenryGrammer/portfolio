<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    //
    public function send(Request $request)
    {
        dd($request->all());
        
    }
}
