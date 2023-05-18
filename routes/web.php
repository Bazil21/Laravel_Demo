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
Route::get('/about',function(){
    return view("about");
});
Route::get('/customer/create', [Customers::class,'index'])->name('customer.create');
Route::post('/customer', [Customers::class,'store']);
Route::get('/customer', [Customers::class,'view']);
Route::get('/customer/delete/{id}', [Customers::class,'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}', [Customers::class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}', [Customers::class,'update'])->name('customer.update');

Route::get('get-all-session', function(){
    $session = session()->all();
    pm($session);
});
