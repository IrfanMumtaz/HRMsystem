<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Make;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class orderSummary extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->admin != 1){
            $summary = DB::table('orders')->Where('email', Auth::user()->email)->get();
            return view('order-summary')->with('summary', $summary);
        }
        if(Auth::user()->admin == 1){
            $summary = DB::table('orders')->get();
            return view('order-summary')->with('summary', $summary);
        }
        
    }

    //order preview
    public function orderPreview($id){
        $orderDetails = DB::table('orders')->where('orderID', $id)->get();
        return View::make('order-preview')->with('details', $orderDetails);
    }
}
