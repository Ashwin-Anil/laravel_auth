<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\FileController;


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
})->name('welcome');

Route::get('/registerform', function () {
    return view('register');
});


Route::middleware(['auth.redirect'])->group(function () {


  Route::get('/userinfo', function () {
        return view('userinfo');
    })->name('userin');


Route::get('/logout',[usercontroller::class,'logout'])->name('logout');

});


Route::post('/registration',[usercontroller::class,'register'])->name('registration');
Route::post('/login',[usercontroller::class,'login'])->name('login');

Route::fallback(function(){
    return redirect()->route('welcome');
});


// // Example route in routes/web.php
//  Route::middleware(['auth','DisablePageCache','web'])->group(function () {


//     Route::get('/userinfo', function () {
//         return view('userinfo');
//     })->name('userin');

// });


// Route::get('/logout',[usercontroller::class,'logout'])->name('logout');



Route::post('/upload', [FileController::class, 'upload'])->name('upload');
