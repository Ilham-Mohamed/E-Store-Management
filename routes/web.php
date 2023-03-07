<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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


Route::middleware(['auth:sanctum', 'verified',])->get('/dashboard', function () {
    return view('dashboard');
    // Route::get('order',[AuthController::class,'placeorder'])->name('order')->middleware('role_check');
    // Route::view('customer.placeorder')->middleware('role_check');
   
})->name('dashboard');





Route::view('register','myauth.register');
Route::view('/','welcome');



// Registraion
Route::post('/register-user',[AuthController::class,'registerUser'])->name('register-user');

Route::view('error','home');



Route::group(['middleware' => ['auth:sanctum', 'verified','role_check']],function(){
    Route::get('order',[AuthController::class,'placeorder'])->name('order');
    Route::get('customer-myorder',[AuthController::class,'cutomer_order_view'])->name('customer-myorder');
    Route::get('/place-order/{id}',[AuthController::class,'select_employee']); 
    Route::post('/place-order',[AuthController::class,'finalorder'])->name('place-order');
    // Route::post('place-status',[AuthController::class,'Order_status']);
    Route::get('customer-myorder',[AuthController::class,'cutomer_order_view'])->name('customer-myorder');
});

Route::group(['middleware' => ['auth:sanctum', 'verified','role_check_employee']],function(){
    Route::get('order-details',[AuthController::class,'employee_order_details'])->name('order-details');
    // Route::post('place-status',[AuthController::class,'Order_status']);
});

Route::group(['middleware' => ['auth:sanctum', 'verified','role_check_customer_and_employee']],function(){
    Route::post('place-status',[AuthController::class,'Order_status']);
});

Route::group(['middleware' => ['auth:sanctum', 'verified','role_check_admin']],function(){

    Route::get('/registration-emp',[AuthController::class,'emp_registration']);
    Route::post('/register-employee',[AuthController::class,'registerUser'])->name('register-employee');
    Route::get('delete-emp/{id}',[AuthController::class,'employee_delete']);
    Route::get('edit-emp/{id}',[AuthController::class,'employee_edit']);
    Route::post('edit-emp',[AuthController::class,'employee_update']);
    Route::get('/employee-dashboard',[AuthController::class,'getemployee']);
    Route::get('show-emp/{id}',[AuthController::class,'employee_detail']);
    Route::get('/edit/{id}',[ProductController::class,'edit']);
    Route::post('/edit',[ProductController::class,'update']);
    
    Route::view('/product','product.create_new_product')->name('product');
    Route::post('/product-add',[ProductController::class,'addproduct'])->name('product-add');
    Route::get('delete/{id}',[ProductController::class,'delete']);
    Route::get('/show/{id}',[ProductController::class,'getproduct']);
    Route::get('employee',[AuthController::class,'getemployee'])->name('employee');

    Route::resource(name:'products',controller:\App\Http\Controllers\ProductController::class);
    
});
Route::group(['middleware' => ['auth:sanctum', 'verified']],function(){
    Route::get('/userdetails',[AuthController::class,'user_detail'])->name('userdetails');
});


