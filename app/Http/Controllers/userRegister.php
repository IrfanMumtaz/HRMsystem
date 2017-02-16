<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\users;

class userRegister extends Controller
{
    //
    public function index(){
    	return false;
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'phone' => 'required|min:11',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function api(array $data)
    {
        $user = new users;
        $user->name = $data->name;
        $user->phone = $data->phone;
        $user->email = $data->email;
        $user->password = bcrypt($data->password);
        $user->save();
        return 'success';
    }
