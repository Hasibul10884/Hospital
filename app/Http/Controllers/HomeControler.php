<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeControler extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
         if (Auth::user()->usertype=='0')

         {
            return view('dashboard');
         }
        }

        else
        {
            return redirect()->back();
        }
    }
}
