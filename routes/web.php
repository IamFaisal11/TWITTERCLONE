<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\twitercontroller;
use App\Http\Controllers\user_controller;
// Route::controller(twitercontroller::class)->group(function()
// {
// Route::get('/','loginmethod')->name('login.page');//->middleware('Age')  loading middleware in routes 
// Route::get('/home','homemethod')->name('home.page'); //->middleware('Age')  loading middleware in routes 
// Route::get('/logout','logoutmethod')->name('logout.page');//creating another name Rout for web pages interconections i'e links
// Route::get('/signup','signupmethod')->name('signup.page');//creating another name Rout for web pages interconections i'e links
// Route::get('/forgotten','forgottenmethod')->name('forgotten.page');//creating another name Rout for web pages interconections i'e links
// 
Route::get('/',[twitercontroller::class,'login']);
Route::post('/login',[twitercontroller::class,'loginpage']);
Route::get('/signup',[twitercontroller::class,'signuser']);
Route::post('/signup/user',[twitercontroller::class,'usersignup']);
Route::get('/home',[twitercontroller::class,'home']);
Route::get('/forget',[user_controller::class,'reset']);
Route::post('/forget',[user_controller::class,'forget']);
Route::get('/profile/{id}',[user_controller::class,'profile']);
Route::get('/edit/{id}',[user_controller::class,'edit']);
Route::post('/tweet',[user_controller::class,'tweet']);
