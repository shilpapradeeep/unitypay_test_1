<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;

// INSTRUCTIONS
Route::get('/', function () {
    return view('home.index');
})->name('home');

// COMPANIES
Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
Route::get('/companies/add', [CompanyController::class, 'add'])->name('companies.add');
Route::post('/companies', [CompanyController::class, 'store'])->name('companies.store');

// TODO: Add routes for companies.show, companies.update, companies.show_users, companies.add_users here

Route::get('edit/company/{id}', [CompanyController::class, 'edit'])->name('companies.edit');
Route::post('update/company', [CompanyController::class, 'update'])->name('companies.update');

Route::get('/companies/{company}/add-users', [CompanyController::class, 'showUsers'])->name('companies.show_users');
Route::post('/companies/{company}/add-users', [CompanyController::class, 'addUsers'])->name('companies.add_users');


// Users
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/add', [UserController::class, 'add'])->name('users.add');
Route::post('/users', [UserController::class, 'store'])->name('users.store');