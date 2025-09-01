<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Admin\MemberController as AdminMemberController;
use App\Http\Controllers\ProfileController;

Route::get('/', [MemberController::class, 'index']);

// Prefix admin
Route::prefix('admin')->group(function () {
    Route::get('/members', [AdminMemberController::class, 'index'])->name('admin.members.index');
    Route::get('/members/create', [AdminMemberController::class, 'create'])->name('admin.members.create');
    Route::post('/members', [AdminMemberController::class, 'store'])->name('admin.members.store');
    Route::delete('/members/{id}', [AdminMemberController::class, 'destroy'])->name('admin.members.destroy');
});

Route::get('/dashboard', function () {
    return view('admin.members.create');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';