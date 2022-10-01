<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
    return  redirect('post');
});
// for login
Auth::routes();
// for posts routes
Route::prefix('post')->group(function(){
    // for user page
    Route::get('/',[PostController::class,'index']);
    Route::get('/profile',[PostController::class,'show']);
   
});
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/',[AdminController::class,'index']);
});

// Route::get('/post', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
