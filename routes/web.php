<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadsController;

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

Route::get('/', [HomeController::class , 'index'])->name('index');

Route::prefix('services')->name('services.')->group(function () {
    Route::get('/book-writing', [HomeController::class , 'bookwriting'])->name('book-writing');
    Route::get('/book-editing', [HomeController::class , 'bookediting'])->name('book-editing');
    Route::get('/cover-design', [HomeController::class , 'coverdesign'])->name('cover-design');
    Route::get('/illustration', [HomeController::class , 'illustration'])->name('illustration');
    Route::get('/self-publishing', [HomeController::class , 'selfpublishing'])->name('self-publishing');
    Route::get('/book-marketing', [HomeController::class , 'bookmarketing'])->name('book-marketing');
    Route::get('/book-formatting', [HomeController::class , 'bookformatting'])->name('book-formatting');
    Route::get('/author-website', [HomeController::class , 'authorwebsite'])->name('author-website');
    Route::get('/script-writing', [HomeController::class , 'scriptwriting'])->name('script-writing');
    Route::get('/blog-writing', [HomeController::class , 'blogwriting'])->name('blog-writing');
    Route::get('/article-writing', [HomeController::class , 'articlewriting'])->name('article-writing');
});

Route::get('/about', [HomeController::class , 'about'])->name('about');
Route::get('/contact', [HomeController::class , 'contact'])->name('contact');


// routes/web.php
Route::post('/lead/store', [LeadsController::class, 'store'])->name('lead.store');