<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{

    public function index(Request $request)
    {
        if ($request->session()->has('ADMIN_LOGIN')) {
            return redirect('/admin/dashboard');
        } else {

            return view('admin.login');
        }
    }

    public function login(Request $request)
    {
        // $admin = new Admin;
        // $admin->username = $request->userName;
        // $admin->password = password_hash($request->userPassword,PASSWORD_DEFAULT);
        // $admin->save();

        $result = Admin::where(['username' => $request->userName])->first();


        if ($result && password_verify($request->userPassword, $result->password)) {
            $request->session()->put('ADMIN_LOGIN', true);
            $request->session()->put('ADMIN_ID', $result->id);

            return redirect('admin/dashboard');
        } else {
            $request->session()->flash('error', 'Please enter valid login details');
            return redirect('admin');
        }
        return "Invalid Login";
    }

    public function dashboard(Request $request)
    {

        $adminID = $request->session()->get('ADMIN_ID');
        $admin = Admin::where(['id' => $adminID])->first();
        return view('admin.dashboard', ['admin' => $admin]);
    }



    public function salesPerson(Request $request)
    {
        //
    }


    public function customer(Request $request)
    {
        //
    }


    public function setting(Request $request)
    {
        //
    }
}
