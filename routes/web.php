<?php

use App\Livewire\Members;
use App\Livewire\Pages\Members\Member;
use App\Livewire\Pages\Members\Payments;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


    
    Route::get('members', Member::class)
    ->middleware(['auth', Member::class])
    ->name('members');

    Route::get('payments', Payments::class)
    ->middleware(['auth', payments::class])
    ->name('payments');
        
    

   
require __DIR__.'/auth.php';
