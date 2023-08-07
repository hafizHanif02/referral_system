<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SalesHeadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', [UserController::class, 'login'])->name('view.login');
Route::post('login', [UserController::class, 'loginUser'])->name('login');
Route::get('signup', [UserController::class, 'signup'])->name('view.signup');
Route::post('signup', [UserController::class, 'signupUser'])->name('signup');

Route::get('admin', [AdminController::class, 'index']);
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::group(['middleware' => 'admin_auth'], function () {
    Route::get('/test', function () {
        return "working";
    });
    Route::get('admin/dashboard', [AdminController::class, 'dashboard']);

    Route::get('admin/sales-head', [SalesHeadController::class, 'salesHead']);
    Route::get('admin/sales-head/new', [SalesHeadController::class, 'newSalesHead']);

    Route::post('admin/sales-head/new', [SalesHeadController::class, 'addNewSalesHead']);


    Route::get('admin/person/', [SalesHeadController::class, 'salesPerson']);
    Route::get('admin/sales-head/{key}/sales-person', [SalesHeadController::class, 'salesHeadSalesPerson']);
    Route::get('admin/sales-head/{key}/sales-person/new',[SalesHeadController::class, 'newSalesPerson']);
    Route::post('admin/sales-head/{key}/sales-person/new', [SalesHeadController::class, 'addNewSalesPerson']);


    Route::get('admin/allcustomers/', [SalesHeadController::class, 'allCustomer']);
    Route::get('admin/sales-person/{keyRef}/customer', [SalesHeadController::class, 'salesPersonCustomer']);




    Route::get('admin/sales-person', [AdminController::class, 'salesPerson']);
    Route::get('admin/customer', [AdminController::class, 'customer']);
    Route::get('admin/setting', [AdminController::class, 'setting']);

});
