<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Livewire\Pages\Dashboard;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboardIndex');




