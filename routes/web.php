<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;
use App\Http\Controllers\IndexController;
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

Route::get('/', function () {return view('layouts.home');})->name('customer.home');
Route::group(['prefix' => '/customer'], function(){
    Route::get('/customer', [customerController::class, 'index']);
Route::get('/register', [customerController::class, 'register'])->name('customer.register');
Route::post('/register', [customerController::class, 'store']);
Route::get('/view', [customerController::class, 'view'])->name('customer.view');
Route::get('/delete/{id}', [customerController::class, 'delete'])->name('customer.delete');
Route::get('/edit/{id}', [customerController::class, 'edit'])->name('customer.edit');
Route::post('/update/{id}', [customerController::class, 'update'])->name('customer.update');
});

Route::get('get-all-session', function(){
    $session = session()->all();
    p($session);
});
Route::get('set-all-session', function(Request $request){
    session()->put('user_name', 'Zeeshan');
    session()->put('user_id', '2018f-mulbscs-069');
    return redirect('get-all-session');
});
Route::get('destroy-all-session', function(){
    session()->forget('user_name');
    return redirect('get-all-session');
});


Route::get('/data', [IndexController::class, 'index']);
Route::get('/group', [IndexController::class, 'group']);