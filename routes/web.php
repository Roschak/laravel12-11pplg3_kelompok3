<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Admin\MemberController as AdminMemberController;

Route::get('/', [MemberController::class, 'index']);

// Prefix admin
Route::prefix('admin')->group(function () {
    Route::get('/members', [AdminMemberController::class, 'index'])->name('admin.members.index');
    Route::get('/members/create', [AdminMemberController::class, 'create'])->name('admin.members.create');
    Route::post('/members', [AdminMemberController::class, 'store'])->name('admin.members.store');
    Route::delete('/members/{id}', [AdminMemberController::class, 'destroy'])->name('admin.members.destroy');
});
