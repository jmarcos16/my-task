<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

$user = User::factory()->create();
try {
    auth()->loginUsingId(1);
} catch (\Throwable $th) {
    // $user = User::factory()->create();
    // auth()->loginUsingId($user->id);
}

Route::view('tasks', 'task')->name('tasks');
Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Volt::route('activity', 'activity/index')->name('activity');

require __DIR__ . '/auth.php';
