<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;



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


Route::get('/index', function () {
    return view('index');
});



Route::get('/about', function (){
    return view('about');
});

Route::get('/gallery', function  (){
    return view('gallery');
});

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/projects1', [App\Http\Controllers\ProjectsController::class, 'show1']);

Route::get('/projects2', [App\Http\Controllers\ProjectsController::class, 'show2']);


Route::get('/login' , function(){
    return view('login');
});

Route::get('/modify' , function(){
    return view('modify');  
});

Route::post('addcontact' , [App\Http\Controllers\ContactController::class, 'add']);

Route::put('/put' , [App\Http\Controllers\UserController::class, 'update']); 

Auth::routes();

Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);

Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);

Route::post('/login/admin', [LoginController::class,'adminLogin']);
Route::post('/register/admin', [RegisterController::class,'createAdmin']);

Route::get('/projects/admin' , [ProjectsController::class, 'showAll']);

Route::get('/projects/create' , [ProjectsController::class, 'create']);

Route::post('/projects/store' , [ProjectsController::class, 'store']);

Route::get('/projects/{id}/edit' , [ProjectsController::class, 'edit']);

Route::put('/projects/{id}', [ProjectsController::class, 'update']);

Route::delete('/projects/{id}', [ProjectsController::class, 'destroy']);

Route::get('/adherents/admin' , [UserController::class, 'show']);

Route::get('/adherents/{id}/edit', [UserController::class, 'edit']);

Route::put('/adherents/{id}', [UserController::class, 'update2']);

Route::get('/contacts' , [ContactController::class , 'show']);

Route::delete('/contacts/{id}' , [ContactController::class , 'delete']);

// Route::group(['middleware' => 'auth:admin'], function () {
    
//     Route::view('auth.admin.admin', 'admin');
// });

Route::get('/admin', function(){
    return view("auth.admin.admin");
});

Route::get('logout', [LoginController::class,'logout']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


