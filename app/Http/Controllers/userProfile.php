<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use DB;

class userProfile extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_profile = Auth::user();
        return view('profile')->with('user', $user_profile);
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
    public function updateProfile()
    {
        //
        $user_email = Auth::user()->email;
        $name = Input::get('name');
        $phone = Input::get('phone');
        $email = Input::get('email');
        $fbLink = Input::get('fbLink');
        $twLink = Input::get('twLink');
        $gpLink = Input::get('gpLink');
        $inLink = Input::get('inLink');
        $skype = Input::get('skype');
        $aim = Input::get('aim');

        User::where('email', $user_email)->update(array(
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'fbLink' => $fbLink,
            'twLink' => $twLink,
            'gpLink' => $gpLink,
            'inLink' => $inLink,
            'skype' => $skype,
            'aim' => $aim
        ));
        return Redirect('profile')->with('message', 'You have successfully updated!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfilePic(Request $request)
    {
        //login user email
        $user_email = Auth::user()->email;

        //profile picture
        if($request->profilePic){
            $profilePic = $request->file('profilePic')->getClientOriginalName();
            User::where('email', $user_email)->update(array(
                'profilePic' => $profilePic
            ));
            $request->file('profilePic')->move(
                base_path() . '/public/assets/images/profile/', $profilePic
            );
        }
        
        //cover photo
        if($request->coverPic){
            $coverPic = $request->file('coverPic')->getClientOriginalName();
            User::where('email', $user_email)->update(array(
                'coverPic' => $coverPic
            ));
            $request->file('coverPic')->move(
                base_path() . '/public/assets/images/cover/', $coverPic
            );
        }

        return Redirect('profile')->with('message', 'Profile Picture successfully updated!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function passwordUpdate(Request $request)
    {
        //
        $user_email = Auth::user()->email;
        $user_pass = Auth::user()->password;

        $oldPassword = Hash::make($request->currentPassword);
        $newPassword = Hash::make($request->newPassword);
        if ($oldPassword === $user_pass) {
            User::where('email', $user_email)->update(array(
                'password' => $newPassword
            ));
        }

        return Redirect('profile')->with('message', 'Profile Picture successfully updated!');
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
