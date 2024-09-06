<?php

use App\Http\Controllers\UserController;
use App\Livewire\Members;
use App\Livewire\Pages\Admins\Admins;
use App\Livewire\Pages\Members\Deposits;
use App\Livewire\Pages\Members\Member;
use App\Livewire\Pages\Members\Payments;
use App\Livewire\Pages\Payments\Method;
use Illuminate\Support\Facades\Route;



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::resource('users', UserController::class);


    
    Route::get('members', Member::class)
    ->middleware(['auth', Member::class])
    ->name('members');

    Route::get('payments', Payments::class)
    ->middleware(['auth', payments::class])
    ->name('payments');


    Route::get('method', Method::class)
    ->middleware(['auth', Method::class])
    ->name('method');

Route::get('TodayDeposit',Deposits::class)
->middleware(['auth',Deposits::class])
->name('TodayDeposit');

    Route::get('admins', Admins::class)
    ->middleware(['auth', Admins::class])
    ->name('admins');
        
    

   
require __DIR__.'/auth.php';
