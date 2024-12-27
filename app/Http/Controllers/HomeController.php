<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //load home page
    function home(){
        return view ('home');
    }

    //show login form
    function showLoginPage(){
        return view('login');
    }

      //show registration form
      function showSignUpPage(){
        return view('sign-up');
    }
}
