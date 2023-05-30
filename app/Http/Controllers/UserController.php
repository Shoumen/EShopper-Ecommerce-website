<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\User;
use Carbon\Carbon;
use Session;
use Image;


class UserController extends Controller{
    public function __construct(){

      $this->middleware('auth');
      $this->middleware('superadmin');
    }

    public function index(){
      $allUser=User::where('status',1)->orderBy('id','DESC')->get();
      return view('admin.user.all',compact('allUser'));

      if($request->hasFile('pic')){
        $image=$request->file('pic');
        $imageName='user_'.$insert.'_'.time().'_'.rand(100000,10000000).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(200,200)->save('uploads/'.$imageName);
      }
      else{
        return $request;
        $allUser->image="{{asset('contents/admin')}}/images/avatar.png";
      }
      

    }

    public function add(){
      return view('admin.user.add');
    }
    public function insert(Request $request){
              //return $request->all();
              $this->validate($request,[
                'name' => ['required', 'string', 'max:255'],
                'phone' => ['required'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'role_id' => ['required'],
              ],[
                'name.required'=>'Please Enter your name!',
                'phone.required'=>'Please Enter your phone number!',
                'email.required'=>'Please enter your valide email!',
                'password.required'=>'Please enter your 8 charecter passwowrd!',
                'role_id.required'=>'Please enter you role',

              ]);

            $insert=User::insertGetId([
              'name'=>$request['name'],
              'phone'=>$request['phone'],
              'email'=>$request['email'],
              'password'=>Hash::make($request['password']),
              'role_id'=>$request['role_id'],
              'photo'=>'',
              'created_at'=>Carbon::now()->toDateTimeString(),
              ]);
              if($request->hasFile('pic')){
                  $image=$request->file('pic');
                  $imageName='user_'.$insert.'_'.time().'_'.rand(100000,10000000).'.'.$image->getClientOriginalExtension();
                  Image::make($image)->resize(200,200)->save('uploads/'.$imageName);

                  User::where('id',$insert)->update([
                      'photo'=>$imageName,
                      'updated_at'=>Carbon::now()->toDateTimeString(),
                  ]);

      }
      if($insert){
        Session::flash('success','value');
        return redirect('admin/user');
      }
      else{
        Session::flash('error','value');
        return redirect('admin/add');
      }
    }
   

}

