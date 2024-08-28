<?php

use App\Http\Controllers\ContactController;
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
})->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


Route::get('/profile', function () {
    return view('pages.company_profile');
});
Route::get('/portfolio', function () {
    return view('pages.portfolio');
});
Route::get('/techStack', function () {
    return view('pages.technologyStacks');
});
Route::get('/products/vatfast', function () {
    return view('pages.products.vatfast');
});
Route::get('/clients', function () {
    return view('pages.clients');
});
