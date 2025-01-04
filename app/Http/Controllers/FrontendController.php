<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function index(){
    return view('frontend.homepage');
   }

   public function home(){
    return view('frontend.homepage2');
   }
   public function about(){
    return view('frontend.about');
   }
   public function contact(){
    return view('frontend.contact');
   }
   public function shop(){
    return view('frontend.shop');
   }
   
   
   public function news(){
    return view('frontend.news');
   }
   public function single_news(){
    return view('frontend.single-news');
   }
   public function single_product(){
    return view('frontend.single-product');
   }
}
