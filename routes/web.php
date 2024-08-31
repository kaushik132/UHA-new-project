<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\AuthController;


Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/sample-page',[HomeController::class, 'sample'])->name('sample');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/services/{slug?}',[HomeController::class, 'services'])->name('services');
Route::get('/service-details/{slug?}',[HomeController::class, 'servicesDetails'])->name('servicesDetails');

Route::get('/blogs/{slug?}',[HomeController::class, 'blogs'])->name('blogs');
Route::get('/blog-details/{slug?}',[HomeController::class, 'blogDetails'])->name('blogDetails');



Route::get('/policy',[HomeController::class, 'policy'])->name('policy');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::post('/contact-post',[HomeController::class, 'contactPost'])->name('contactPost');


Route::post('/assignment-post',[HomeController::class, 'assignmentPost'])->name('assignmentPost');




 

Route::get('/genrater-pdf/{id}', [HomeController::class, 'genraterPDF'])->name('genrater.pdf');


Route::get('place-your-order',[HomeController::class, 'placeOrder']);
Route::get('/refund-policy',[HomeController::class, 'refund']);
Route::get('/search',[HomeController::class, 'search']);


// Password reset routes
Route::get('/reset-password', [HomeController::class, 'showResetRequestForm'])->name('password.request');
Route::post('/reset-password', [HomeController::class, 'handleResetRequest'])->name('password.request.handle');
Route::get('/reset-password/{token}/{email}', [HomeController::class, 'showResetForm'])->name('password.reset.form');
Route::post('/reset-password/update', [HomeController::class, 'resetPassword'])->name('password.update');




Route::get('sitemap.xml',[SitemapController::class, 'index']);