<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitemapController;





Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/services/{slug?}',[HomeController::class, 'services'])->name('services');
Route::get('/service-details/{slug?}',[HomeController::class, 'servicesDetails'])->name('servicesDetails');

Route::get('/blogs/{slug?}',[HomeController::class, 'blogs'])->name('blogs');
Route::get('/blog-details/{slug?}',[HomeController::class, 'blogDetails'])->name('blogDetails');


Route::get('/casestudies',[HomeController::class, 'casestudies'])->name('casestudies');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::post('/contact-post',[HomeController::class, 'contactPost'])->name('contactPost');


 

Route::get('/genrater-pdf/{id}', [HomeController::class, 'genraterPDF'])->name('genrater.pdf');
Route::get('/sample-page',[HomeController::class, 'sample']);

Route::get('place-your-order',[HomeController::class, 'placeOrder']);
Route::get('/refund-policy',[HomeController::class, 'refund']);
Route::get('/search',[HomeController::class, 'search']);




Route::get('sitemap.xml',[SitemapController::class, 'index']);