<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function __Construct(){
        $this->middleware('auth'); 

    }
  public function index(){
    return view('admin.dashboard.index');
    }
}
