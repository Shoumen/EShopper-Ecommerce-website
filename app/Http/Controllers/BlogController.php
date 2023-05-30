<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Blogpost;
use Carbon\Carbon;
use Session;


class BlogController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function index(){
        return view('admin.blog.all');
    }
    public function add(){
        return view('admin.blog.add');
    }
    public function view(){

    }
    public function edit(){

    }
    public function insert(Request $request){
        $insert=Blogpost::create([
            'blog_title'=>$request->title,
            'blog_detail'=>$request->detail,
            'blog_url'=>$request->url,
            'blog_cover'=>$request->title,
            'blog_photo'=>$request->title,
            'blog_creator'=>$request->$creator,
            'blog_slug'=>'Bog'.uniqid(),
        ]);

    }
}
