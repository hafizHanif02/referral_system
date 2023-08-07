<?php

namespace App\Http\Controllers;

use App\Models\SalesHead;
use App\Models\SalesPerson;

use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\Customer;
use App\Models\User;
use Auth;

class SalesHeadController extends Controller
{
    public function salesHead(Request $request)
    {
        $adminID = $request->session()->get('ADMIN_ID');
        $admin = Admin::where(['id' => $adminID])->first();
        $salesHead = User::join('sales_heads', 'sales_heads.userID', '=', 'users.id')->where(['userType' => 'sHead'])->get();


        foreach ($salesHead as $head) {
            $head->salesPerson = SalesPerson::where(['salesHeadID' => $head->id])->count();
        }

        return view('admin.salesHead', ['admin' => $admin, 'salesHead' => $salesHead]);
    }

    public function salesPerson(Request $request)
    {
        $adminID = $request->session()->get('ADMIN_ID');
        $admin = Admin::where(['id' => $adminID])->first();
        $salesPerson = User::join('sales_people', 'sales_people.userID', '=', 'users.id')->where(['userType'=> 'sPerson'])->get();
        $usersss =  User::where('userType', 'sPerson')->get();
        // dd($usersss);

        return view('admin.salesPerson', ['admin' => $admin, 'salesPerson' => $salesPerson, 'usersss' => $usersss]);
    }
    public function allCustomer(Request $request){


        $adminID = $request->session()->get('ADMIN_ID');
        $admin = Admin::where(['id' => $adminID])->first();
        $salesPerson = User::join('sales_people', 'sales_people.userID', '=', 'users.id')->where(['userType'=> 'sPerson'])->get();
        $usersss =  User::where('userType', 'nCustomer')->get();

        // dd($usersss);


        return view('admin.customer',['admin'=>$admin,'salesPerson' => $salesPerson , 'usersss'=>$usersss]);
    }


    public function newSalesHead(Request $request)
    {
        $adminID = $request->session()->get('ADMIN_ID');
        $admin = Admin::where(['id' => $adminID])->first();

        return view('admin.salesHeadNew', ['admin' => $admin]);
    }
    public function newSalesPerson(Request $request)
    {
        $adminID = $request->session()->get('ADMIN_ID');
        $admin = Admin::where(['id' => $adminID])->first();
        $salesHead = User::join('sales_heads', 'sales_heads.userID', '=', 'users.id')->where(['users.id' => $request->key])->get();
        foreach ($salesHead as $head) {
            $head->salesPerson = SalesPerson::join('users', 'users.id', '=', 'sales_people.id')->where(['salesHeadID' => $head->id])->get();
        }
        return view('admin.salesPersonNew', ['admin' => $admin, 'key' => $request->key]);
    }

    public function addNewSalesHead(Request $request)
    {

        if ($request->email && $request->password) {
            if (User::where(['email' => $request->email])->first()) {
                return "Email is already registred";
            }
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = password_hash($request->password, PASSWORD_DEFAULT);
            $user->phone = $request->phone;
            $user->refCode = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUBWXYZ#$@'), 6, 6);
            $user->isActive = 1;
            $user->userType = "sHead";
            $user->save();

            $sHead = new SalesHead;
            $sHead->userID = $user->id;
            $sHead->save();

            return redirect('/admin/sales-head');
        }
        return "Something went wrong, please contact Developer";
    }

    public function addNewSalesPerson($salesHeadId,Request $request){
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
            $user->userType="sPerson";
            $user->save();


            $sPerson = new SalesPerson;
            $sPerson->userID=$user->id;
            $sPerson->salesHeadID=$salesHeadId;
            $sPerson->save();

             return redirect('/admin/sales-head');
           }
           return "Something went wrong, please contact Developer";
       }




    public function salesHeadSalesPerson(Request $request)
    {

        $adminID = $request->session()->get('ADMIN_ID');
        $admin = Admin::where(['id' => $adminID])->first();
        $salesHead = User::join('sales_heads', 'sales_heads.userID', '=', 'users.id')->where(['users.id' => $request->key])->first();



        $salesPersons = SalesPerson::join('users', 'users.id', '=', 'sales_people.userID')
            ->where(['sales_people.salesHeadID' => $salesHead->id])
            ->get();


        if ($salesHead) {
            $salesHead->salesPerson = SalesPerson::join('users', 'users.id', '=', 'sales_people.id')->where(['salesHeadID' => $salesHead->id])->get();


            return view('admin.salesHead-salesperson', ['admin' => $admin, 'salesHead' => $salesHead, 'salesPersons' => $salesPersons]);
        } else {
            return redirect('/admin/sales-head/');
        }
    }


    public function salesPersonCustomer(Request $request)
{
    $adminID = $request->session()->get('ADMIN_ID');
    $admin = Admin::where(['id' => $adminID])->first();
    $salesHead = User::join('sales_heads', 'sales_heads.userID', '=', 'users.id')->where(['users.id' => $request->key])->first();

    $salesPersons = SalesPerson::join('users', 'users.id', '=', 'sales_people.userID')
        ->where(['sales_people.userID' => $request->keyRef])
        ->first();

    $customers = User::join('customers', 'users.id', '=', 'customers.userID')->where('customers.refCode_id_from', $salesPersons->userID)
        ->get();



    // Update points for the parent salesperson if applicable
    if ($salesPersons->refCode) {
        $parentSalesPerson = SalesPerson::join('users', 'users.id', '=', 'sales_people.userID')->where('refCode', $salesPersons->refCode)->first();

    }

    return view('admin.salesperson-customers', ['admin' => $admin, 'salesPerson' => $salesPersons, 'customers' => $customers]);
}
}
