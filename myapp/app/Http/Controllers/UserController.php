<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;


class UserController extends Controller
{
    /**
     * 显示指定用户的简介
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
	 $users = DB::select('select * from hx_user where id = :id', ['id' => 1]);

     //foreach ($users as $user) {

     //echo $user->username;

     //}
	// exit;
		$title = '<span style="color: red">文章</span>标题1';
		$intro = '文章一的简介';
		//return view('articles.lists')->with('title',$title);
		// return view('articles.lists',compact('title','intro'));
        return view('index',['title'=>$title,'introduction'=>$intro,'users'=>$users]);
    }
	 public function index()
    {
        return view('welcome');
    }
}
