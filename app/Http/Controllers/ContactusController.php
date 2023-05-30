<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;
use Carbon\Carbon;
use Session;

class ContactusController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function insert(Request $request){
        
        $insert=Contactus::create([
            'conus_name'=>$request->name,
            'conus_email'=>$request->email,
            'conus_phone'=>$request->phone,
            'conus_sub'=>$request->subject,
            'conus_mess'=>$request->message,
            'conus_slug'=>'B'.uniqid(),
        ]);

        if($insert){
            return redirect('/');
        }else{
            return redirect('website/contact');
        }
    }

    public function index(){
        $all=Contactus::where('conus_status',1)->orderBy('conus_id','DESC')->get();
        return view('admin.contactus.all',compact('all'));
    }

    public function view($slug){
        $data=Contactus::where('conus_status',1)->where('conus_slug',$slug)->firstOrFail();
        return view('admin.contactus.view',compact('data'));
    }

    public function soft_delete(){
        $id=$_POST['modal_id'];
        $soft=Contactus::where('conus_status',1)->where('conus_id',$id)->update([
            'conus_status'=>0,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($soft){
            Session::flash('success');
            return redirect('admin/contactus');
        }else{
            Session::flash('error');
            return redirect('admin/contactus');
        }
    }

    public function restore(){
        $id=$_POST['modal_id'];
        $restore=Contactus::where('conus_status',0)->where('conus_id',$id)->update([
            'conus_status'=>1,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($restore){
            Session::flash('restore');
            return redirect('admin/recycle/contact');
        }else{
            Session::flash('error_restore');
            return redirect('admin/recycle/contact');
        }
    }

    public function delete(){
        $id=$_POST['modal_id'];
        $delete=Contactus::where('conus_status',0)->where('conus_id',$id)->delete();
        if($delete){
            Session::flash('delete');
            return redirect('admin/recycle/contact');
        }else{
            Session::flash('error_delete');
            return redirect('admin/recycle/contact');
        }
    }

    
}
