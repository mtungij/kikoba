<?php

use App\Livewire\Members;
use App\Livewire\Pages\Members\Member;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


    
    Route::get('members', Member::class)
    ->name('members');
        
    

   
require __DIR__.'/auth.php';
