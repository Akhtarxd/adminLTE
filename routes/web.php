<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CompanyController;
use App\Http\Middleware\EnsureLogin;

Route::get('/',function(){
    return view('auth.login');
});

Route::resource('/emp', EmployeeController::class)->middleware(EnsureLogin::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/addCompany',[CompanyController::class, 'index'])->name('addCompany');
Route::post('/CompanyStore',[CompanyController::class, 'store'])->name('CompanyStore');
Route::get('/company/{id}/edit', [CompanyController::class, 'edit'])->name('company.edit');
Route::delete('/company/{id}', [CompanyController::class, 'destroy'])->name('company.destroy');




////Tuhin Akhtar//////

