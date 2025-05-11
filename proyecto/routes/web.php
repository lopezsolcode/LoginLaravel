<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginControler;

Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::view('/secret', 'secret')->name('secret');

Route::post('/validar-registro', [LoginControler::class, 'register'])->name('validar-registro');
Route::post('/iniciar-sesion', [LoginControler::class, 'login'])->name('iniciar-sesion');
Route::get('/logout', [LoginControler::class, 'logout'])->name('logout');

