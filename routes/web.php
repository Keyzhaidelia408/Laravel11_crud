<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'loadAllUser'])->name('users');
Route::get('add/user', [UserController::class, 'loadAddUserForm'])->name('add-user-form');
Route::post('add/user', [UserController::class, 'addUser'])->name('add-user');
Route::get('/edit/{id}', [UserController::class, 'loadEditUserForm']);
Route::get('/delete/{id}', [UserController::class, 'deleteUser']);
Route::post('/edit/user', [UserController::class, 'EditUser'])->name('edit-user');
