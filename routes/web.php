<?php

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
// LP獲得用
Route::get('info', function () {
    // return view('facebook.check'); //確認用LP
    return view('facebook.pp'); //獲得LP(3) - パパ活LINE誘導
    
    // return view('facebook.jobo23'); //獲得LP(2)
    
    // return view('facebook.job'); //獲得LP(1)
});

// LP確認用
Route::get('cccheck', function () {
    return view('facebook.pp'); //獲得LP(3) - パパ活LINE誘導
    
    // return view('facebook.jobo23'); //獲得LP(2)
    // return view('facebook.job'); //獲得LP(1)
});
