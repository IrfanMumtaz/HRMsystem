<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\orders;
use DB;

class newOrder extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('new-order');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $lastOrder = 0;
        $lastOrder = DB::table('orders')->orderBy('orderID', 'DESC')->first();
        if($lastOrder){
            $lastOrderID = $lastOrder->orderID;
            ++$lastOrderID;
        }        
        if($lastOrder == 0){
            $lastOrderID = 159;
        }
        $addOrder = new orders;
        $addOrder->orderID = $lastOrderID;
        $addOrder->email = $request->user_email;
        $addOrder->writingServices = $request->writingServices;
        $addOrder->educationLevel = $request->educationLevel;
        $addOrder->serviceLevel = $request->serviceLevel;
        $addOrder->topicTitle = $request->topicTitle;
        $addOrder->furtherDetails = $request->furtherDetails;
        $addOrder->fileAttach = $request->file('fileAttach')->getClientOriginalName();
        $addOrder->numberOfPages = $request->numberOfPages;
        $addOrder->deadline = $request->deadline;
        $addOrder->pricePerPage = $request->pricePerPage;
        $addOrder->totalAmount = $request->totalAmount;

        $addOrder->save();

        $imageName = $request->file('fileAttach')->getClientOriginalName();

        $request->file('fileAttach')->move(
            base_path() . '/public/assets/images/orderFiles/', $imageName
        );
        return Redirect()->back()->with('message', ['Orde has been placed successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
