<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class,'index'])->name('home');

Route::group(['prefix'=>'account'],function(){
    Route::group(['middleware'=>'guest'],function(){

        Route::get('register', [AccountController::class,'register'])->name('account.register');
        Route::post('register', [AccountController::class,'processRegister'])->name('account.processRegister');
       
        Route::get('login', [AccountController::class,'login'])->name('account.login');
        Route::post('login', [AccountController::class,'authenticate'])->name('account.authenticate');
    });

    Route::group(['middleware'=>'auth'],function(){
        Route::get('profile', [AccountController::class,'profile'])->name('account.profile');
        Route::get('logout', [AccountController::class,'logout'])->name('account.logout');
        Route::get('edit-profile',[AccountController::class,'edit_profile'])->name('account.edit-profile');
        Route::post('update-profile',[AccountController::class,'updateProfile'])->name('account.updateProfile');
    });


Route::get('events/create',[EventController::class,'create'])->name('events.create');
Route::post('events/create',[EventController::class,'store'])->name('events.store');    
Route::get('events/view-event',[EventController::class,'view_event'])->name('events.view-event'); 
Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
Route::get('/events/{id}/edit', [EventController::class, 'edit_event'])->name('events.edit-event');
Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');

Route::get('/event/{id}', [EventController::class, 'show'])->name('event.detail');
Route::post('/event/{event}/book', [BookingController::class, 'store'])->name('event.book');


Route::post('/booking/{event}', [BookingController::class, 'store'])->name('booking.store');
Route::get('/my-bookings', [BookingController::class, 'myBookings'])->name('bookings.my-bookings');
Route::delete('/bookings/{booking}', [BookingController::class, 'destroy'])->name('booking.destroy');

}); 