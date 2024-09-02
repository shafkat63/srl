<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.home');
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });
// Route::get('/services', function () {
//     return view('pages.services');
// });
// Route::get('/contact', function () {
//     return view('pages.contact');
// })->name('contact');

// Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


// Route::get('/profile', function () {
//     return view('pages.company_profile');
// });
// Route::get('/portfolio', function () {
//     return view('pages.portfolio');
// });
// Route::get('/techStack', function () {
//     return view('pages.technologyStacks');
// });
// Route::get('/products/vatfast', function () {
//     return view('pages.products.vatfast');
// });
// Route::get('/clients', function () {
//     return view('pages.clients');
// });




Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');
Route::view('/profile', 'pages.company_profile')->name('profile');
Route::view('/portfolio', 'pages.portfolio')->name('portfolio');
Route::view('/techStack', 'pages.technologyStacks')->name('techStack');
Route::view('/products/vatfast', 'pages.products.vatfast')->name('products.vatfast');
Route::view('/products/sforce', 'pages.products.sforce')->name('products.sforce');
Route::view('/products/ivvr', 'pages.products.ivvr')->name('products.ivvr');
Route::view('/products/mbill', 'pages.products.mbill')->name('products.mbill');
Route::view('/products/payroll', 'pages.products.payRoll')->name('products.payroll');
Route::view('/clients', 'pages.clients')->name('clients');

// Contact Page
Route::view('/contact', 'pages.contact')->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');