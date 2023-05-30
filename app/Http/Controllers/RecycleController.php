<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;
use Carbon\Carbon;
use Session;

class RecycleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('superadmin');
    }

    public function index(){
        return view('admin.recycle.index');
    }

    public function banner(){

    }

    public function contact(){
        $all=Contactus::where('conus_status',0)->orderBy('conus_id','DESC')->get();
        return view('admin.recycle.contact',compact('all'));
    }
}
