<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class usersList extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index(){
    	$userList = DB::table('users')->get();
    	return view('users')->with('userList', $userList);
    }
}
