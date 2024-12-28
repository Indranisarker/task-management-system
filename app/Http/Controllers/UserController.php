<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function addUser(Request $request){
        $request->validate([
            'name' => 'required | min:3 | max:50',
            'email' => 'required | email',
            'employee-id' => 'required | numeric',
            'password' => 'required',
            'role' => 'required'
        ]);
        
    }
}
