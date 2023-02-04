<?php

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

Route::get('/', function () {
    return view('index');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function() {
    Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']);

});
Route::get('/', function () {
    return view('pages.mainindex');
});
Route::get('/mainindex', function(){
    return view('pages.mainindex');
});
Route::get('/hotproduct', function(){
    return view('pages.hotproduct');
});
Route::get('/usedproduct', function(){
    return view('pages.usedproduct');
});
Route::get('/contactus', function(){
    return view('pages.contactus');
});
Route::get('/shopbackcushion', function(){
    return view('pages.shopbackcushion');
});
Route::get('/shopbed', function(){
    return view('pages.shopbed');
});
Route::get('/shopcharger', function(){
    return view('pages.shopcharger');
});
Route::get('/shopdrone', function(){
    return view('pages.shopdrone');
});
Route::get('/shoplaptop', function(){
    return view('pages.shoplaptop');
});
Route::get('/shopprojector', function(){
    return view('pages.shopprojector');
});
Route::get('/shopsweing', function(){
    return view('pages.shopsweing');
});
Route::get('/shopsmartphone', function(){
    return view('pages.shopsmartphone');
});
Route::get('/shopspeaker', function(){
    return view('pages.shopspeaker');
});
Route::get('/shopwatches', function(){
    return view('pages.shopwatches');
});
Route::get('/tech', function(){
    return view('pages.tech');
});
Route::get('/shopskincare', function(){
    return view('pages.shopskincare');
});
Route::get('/login', function(){
    return view('pages.login');
});

Route::post('/login',[UserController::class,'login']);
Route::get('/register', function(){
    return view('admin.pages.register');
});

