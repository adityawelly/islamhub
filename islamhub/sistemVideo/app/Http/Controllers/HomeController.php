<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
    	$users = DB::table('video')->select('*')->get();
    	return view('home')
    		->with('video',$users);
    }
    public function tonton($id){
    	$users = DB::table('video')->select('*')->where('id',$id)->get();
    	return view('video')
    		->with('video',$users['0']);
    }
    public function search(){
    	$id=$_GET['search'];
    	$users = DB::table('video')->select('*')->where('judul','LIKE','%'.$id.'%')->get();
    	return view('search')
    		->with('video',$users);
    }
}
