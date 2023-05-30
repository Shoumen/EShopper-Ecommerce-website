<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class websiteController extends Controller
{
    public function __construct(){

    }
    public function index(){
        return view('website.home');
    }
    public function blogpost(){
        return view('website.blog-post');
    }
    public function blog(){
        return view('website.blog');
    }
    public function contact(){
        return view('website.contact');
    }
    public function cart(){
        return view('website.cart');
    }
    public function product(){
        return view('website.product');
    }
    public function regular(){
        return view('website.regular');
    }
    public function shop(){
        return view('website.shop');
    }
}
