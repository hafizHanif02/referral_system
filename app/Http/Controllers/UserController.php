<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;

class UserController extends Controller
{

    function login(){
        return view('login');
    }

    public function loginUser(Request $request){
        return $request;
    }

    public function signup(){
        return view('register');
    }

    public function signupUser(Request $request){

        if($request->email && $request->password){
            if(User::where(['email' => $request->email])->first()){
                return "Email is already registred";
            }
            $user = new User;
			$user->name=$request->name;
            $user->email=$request->email;
            $user->password=password_hash($request->password,PASSWORD_DEFAULT);
            $user->phone=$request->phone;
            $user->refCode=substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUBWXYZ#$@'), 6, 6);
            $user->isActive=1;
            $user->userType="nCustomer";
         $user->save();

            $cust = new Customer;
            $cust->userID =$user->id;
            if($request->refCode){
                $refUserID = User::where(['refCode' => $request->refCode])->first();

         $point=$refUserID->points;
         $point=$point+1;
         $refUserID->points=$point;
         $refUserID ->save();
                if($refUserID){
                    $cust->refCode_from =$request->refCode;
                    $cust->refCode_id_from =$refUserID->id;
                }
            }

            $cust->save();

            return 'Customer Regiatered Successfully!';
        }
        return "Error, please try again";
    }
}
