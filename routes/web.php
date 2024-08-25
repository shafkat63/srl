<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/services', function () {
    return view('pages.services');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/profile', function () {
    return view('pages.company_profile');
});
Route::get('/portfolio', function () {
    return view('pages.portfolio');
});
