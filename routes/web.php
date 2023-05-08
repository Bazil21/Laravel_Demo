<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registration;
use App\Models\Customer;
use App\Http\Controllers\Customers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register', [Registration::class,'index']);
Route::post('/register', [Registration::class,'register']);


Route::get('/',function(){
    return view("welcome");
});
Route::get('/',function(){
    return view("welcome");
});
Route::get('/customer', [Customers::class,'index']);
Route::post('/customer', [Customers::class,'store']);
Route::get('/customer/view', [Customers::class,'view']);

