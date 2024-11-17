<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\FriendshipController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::controller(UserController::class)
        ->prefix('users')
        ->name('users.')
        ->group(function () {
            Route::get('search', 'search')->name('search');
        });

    Route::controller(FriendshipController::class)
        ->prefix('friends')
        ->name('friends.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/friend-requests', 'friendRequests')->name('friendRequests');
        });

    Route::controller(ChatController::class)
        ->prefix('chat')
        ->name('chat.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
        });
});
