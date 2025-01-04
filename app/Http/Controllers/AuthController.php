<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function cart(){
        return view('frontend.cart');
       }

       public function checkout(){
        return view('frontend.checkout');
       }
}
