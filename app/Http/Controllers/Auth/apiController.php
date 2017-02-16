<?php

namespace App\Http\Controllers\Auth;

use App\User;
use DB;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\orders;

class apiController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $_fields)
    // {
    //     return Validator::make($_fields, [
    //         'name' => 'required|max:255',
    //         'email' => 'required|email|max:255|unique:users',
    //         'password' => 'required|min:6|confirmed',
    //         'phone' => 'required|min:11',
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function sigunup(Request $_fields)
    {
        //return 'hello';
        $data = $_fields->all();
        $dup_email = DB::table('users')->where('email', $data['email'])->get(array('email'));
        if(!$dup_email){
            User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'phone' => $data['phone'],
            ]);
            return "";
        }
        else{
            return "";
        }
        
    }
    public function order(Request $request)
    {
        //
        
        $addOrder = new orders;
        $addOrder->orderID = $request->OrderID;
        $addOrder->email = $request->emailAddress;
        $addOrder->writingServices = $request->writingServices;
        $addOrder->educationLevel = $request->educationLevel;
        $addOrder->serviceLevel = $request->serviceLevel;
        $addOrder->topicTitle = $request->topicTitle;
        $addOrder->furtherDetails = $request->furtherDetails;
        $addOrder->fileAttach = $request->fileAttach;
        $addOrder->numberOfPages = $request->numberOfPages;
        $addOrder->deadline = $request->deadline;
        $addOrder->pricePerPage = $request->pricePerPage;
        $addOrder->totalAmount = $request->totalAmount;

        $addOrder->save();

        // $imageName = $request->fileAttach;

        // $request->fileAttach->move(
        //     base_path() . '/public/assets/images/orderFiles/', $imageName
        // );
        return '<script>alert("Your order has been placed. Thanks!")</script>';
    }
}
