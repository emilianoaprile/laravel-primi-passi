<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// home
Route::get('/', function (){

    return view('homePage');

})->name('home');

// about us
Route::get('/about', function () {

    return view('aboutPage');

})->name('about');

// c
Route::get('/contacts', function () {

    return view('contactsPage');

})->name('contacts');

