<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/event-detail',[HomeController::class,'details'])->name('event.detail');

Route::get('account/register',[AccountController::class,'register'])->name('account.register');
Route::get('account/login',[AccountController::class,'login'])->name('account.login');
Route::get('account/profile',[AccountController::class,'profile'])->name('account.profile');
Route::get('account/edit-profile',[AccountController::class,'edit_profile'])->name('account.edit-profile');

Route::get('event/view-bookings',[EventController::class,'view_bookings'])->name('event.view-bookings');
Route::get('event/add-event',[EventController::class,'add_event'])->name('event.add-event');
Route::get('event/edit-event',[EventController::class,'edit_event'])->name('event.edit-event');     
Route::get('event/view-event',[EventController::class,'view_event'])->name('event.view-event'); 