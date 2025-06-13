<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
     Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', [UserController::class, 'view'])->name('all');
        Route::get('/add', [UserController::class, 'add'])->name('add');
        
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/{id}', [UserController::class, 'show'])->name('show');

        Route::get('/{id}/update', [UserController::class, 'edit'])->name('edit');

        Route::patch('/{user}', [UserController::class, 'update'])->name('update');




    });
});

require __DIR__.'/auth.php';
