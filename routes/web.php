<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Role\RolesController;
use App\Http\Controllers\owner\ownerController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Frontend routes
Route::get('/', [FrontendController::class, 'index'])->name('myhome');
Route::get('/about', [FrontendController::class, 'about'])->name('aboutUs');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contactUs');

// Frontend Owner route
Route::get('/owner', [ownerController::class, 'owner'])->name('Owner');


// Auth routes
Route::get('/login', [FrontendController::class, 'login'])->name('login');
Route::get('/register', [FrontendController::class, 'register'])->name('register');

// Backend routes
Route::get('/role', [BackendController::class, 'Role'])->name('myRole');
Route::get('/table', [BackendController::class, 'Table'])->name('myTable');

// Role management routes
Route::post('/role', [RolesController::class, 'create'])->name('roles.create');
Route::put('/role/{id}', [RolesController::class, 'update'])->name('roles.update');
Route::delete('/role/{id}', [RolesController::class, 'delete'])->name('roles.delete');

// Dashboard and profile routes
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
