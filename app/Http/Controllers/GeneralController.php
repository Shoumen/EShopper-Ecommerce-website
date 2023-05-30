<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Basic;
use App\Models\SocialMedia;
use App\Models\ContactInformation;
use Carbon\Carbon;
use Session;
use Image;

class GeneralController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('superadmin');
    }

    public function index(){

    }

    public function basic(){
        $basic=Basic::where('basic_status',1)->find(1);
        return view('admin.general.basic',compact('basic'));
    }

    public function basic_update(Request $request){
        $update=Basic::where('basic_status',1)->where('basic_id',1)->update([
            'basic_title'=>$request['title'],
            'basic_subtitle'=>$request['subtitle'],
            'basic_details'=>$request['details'],
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('logo')){
            $image=$request->file('logo');
            $imageName='logo_'.time().'_'.rand(100000,10000000).'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/'.$imageName);

            Basic::where('basic_id',1)->update([
                'basic_logo'=>$imageName,
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ]);
        }

        if($request->hasFile('favicon')){
            $image=$request->file('favicon');
            $imageName='favicon_'.time().'_'.rand(100000,10000000).'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/'.$imageName);

            Basic::where('basic_id',1)->update([
                'basic_favicon'=>$imageName,
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ]);
        }

        if($request->hasFile('flogo')){
            $image=$request->file('flogo');
            $imageName='flogo_'.time().'_'.rand(100000,10000000).'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/'.$imageName);

            Basic::where('basic_id',1)->update([
                'basic_flogo'=>$imageName,
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ]);
        }

        if($update){
            Session::flash('success');
            return redirect('admin/general/basic');
        }else{
            Session::flash('error');
            return redirect('admin/general/basic');
        }
    }

    public function social(){
        $social=SocialMedia::where('sm_status',1)->where('sm_id',1)->firstOrFail();
        return view('admin.general.social',compact('social'));
    }

    public function social_update(Request $request){
        $update=SocialMedia::where('sm_status',1)->where('sm_id',1)->update([
            'sm_facebook'=>$request['facebook'],
            'sm_twitter'=>$request['twitter'],
            'sm_linkedin'=>$request['linkedin'],
            'sm_instagram'=>$request['instagram'],
            'sm_pinterest'=>$request['pinterest'],
            'sm_google'=>$request['google'],
            'sm_youtube'=>$request['youtube'],
            'sm_skype'=>$request['skype'],
            'sm_behance'=>$request['behance'],
            'sm_dribbble'=>$request['dribbble'],
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('success');
            return redirect('admin/general/social');
        }else{
            Session::flash('error');
            return redirect('admin/general/social');
        }
    }

    public function contact(){
        $conInfo=ContactInformation::where('cont_status',1)->where('cont_id',1)->firstOrFail();
        return view('admin.general.contact',compact('conInfo'));
    }

    public function contact_update(Request $request){
        $update=ContactInformation::where('cont_status',1)->where('cont_id',1)->update([
            'cont_phone1'=>$request['phone1'],
            'cont_phone2'=>$request['phone2'],
            'cont_phone3'=>$request['phone3'],
            'cont_phone4'=>$request['phone4'],
            'cont_email1'=>$request['email1'],
            'cont_email2'=>$request['email2'],
            'cont_email3'=>$request['email3'],
            'cont_email4'=>$request['email4'],
            'cont_add1'=>$request['add1'],
            'cont_add2'=>$request['add2'],
            'cont_add3'=>$request['add3'],
            'cont_add4'=>$request['add4'],
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('success');
            return redirect('admin/general/contact');
        }else{
            Session::flash('error');
            return redirect('admin/general/contact');
        }
    }
}
