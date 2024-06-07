<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

// Define the routes for the application
Route::get('/members', [MemberController::class, 'index'])->name('members.index');
Route::get('/members/{id}', [MemberController::class, 'show'])->name('members.show');
Route::get('/members/{id}/edit', [MemberController::class, 'edit'])->name('members.edit');
Route::put('/members/{id}', [MemberController::class, 'update'])->name('members.update');
Route::get('/leaderboard', [MemberController::class, 'leaderboard'])->name('members.leaderboard');
Route::get('/', [MemberController::class, 'leaderboard'])->name('members.leaderboard');