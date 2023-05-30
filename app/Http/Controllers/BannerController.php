<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Banner;
use Carbon\Carbon;
use Session;

class BannerController extends Controller{
    public function __construct(){
        $this->middleware('auth');
        // $this->middleware('superadmin');
        $this->middleware('admin');
    }

    public function index(){
        $all=Banner::where('ban_status',1)->orderBy('ban_id','DESC')->get();
        return view('admin.banner.all',compact('all'));
    }

    public function add(){
        return view('admin.banner.add');
    }

    public function view($slug){
        $data=Banner::where('ban_status',1)->where('ban_slug',$slug)->firstOrFail();
        return view('admin.banner.view',compact('data'));
    }

    public function edit($slug){
        $data=Banner::where('ban_status',1)->where('ban_slug',$slug)->firstOrFail();
        return view('admin.banner.edit',compact('data'));
    }

    public function insert(){
        $slug='B'.uniqid();
        $creator=Auth::user()->id;
        $insert=Banner::insert([
            'ban_title'=>$_POST['title'],
            'ban_subtitle'=>$_POST['subtitle'],
            'ban_btn'=>$_POST['btn'],
            'ban_url'=>$_POST['url'],
            'ban_creator'=>$creator,
            'ban_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            return redirect('admin/banner');
        }else{
            return redirect('admin/banner/add');
        }
    }
    public function update(Request $request){
      // return $request->all();
      $id=$request['id'];
      $slug=$request['slug'];
      $update=Banner::where('ban_status',1)->where('ban_id',$id)->update([
        'ban_title'=> $request['title'],
        'ban_subtitle'=> $request['subtitle'],
        'ban_btn'=> $request['btn'],
        'ban_url'=> $request['url'],
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);
      if($update){
        Session::flash('success');
        return redirect('admin/banner/view/'.$slug);
      }else{
        Session::flash('error');
        return redirect('admin/banner/edit/'.$slug);
      }
    }
}
