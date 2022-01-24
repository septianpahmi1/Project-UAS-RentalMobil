<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function usersdata()
    {
        $CarDetail=usersdata::all();
        return view('reg-users',compact ('usersdata'));
     
    }
}
