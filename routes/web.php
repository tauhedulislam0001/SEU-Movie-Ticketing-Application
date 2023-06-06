<?php

use App\Http\Controllers\Frontend\About\AboutController;
use App\Http\Controllers\Frontend\AppDownload\AppDownloadController;
use App\Http\Controllers\Frontend\Blog\BlogController;
use App\Http\Controllers\Frontend\Contact\ContactController;
use App\Http\Controllers\Frontend\Events\EventController;
use App\Http\Controllers\Frontend\Home\HomePageController;
use App\Http\Controllers\Frontend\LoginPage\LoginPageController;
use App\Http\Controllers\Frontend\Movies\MoviesController;
use App\Http\Controllers\Frontend\PageNotFound\PageNotFoundController;
use App\Http\Controllers\Frontend\Sports\SportController;
use Illuminate\Support\Facades\Route;

/* ---------- Home Page Controller ---------- */
Route::get('/', [HomePageController::class, 'index'])->name('home');

/* ---------- Movies Controller ---------- */
Route::get('/movies', [MoviesController::class, 'index'])->name('movies');
Route::get('/movie/details', [MoviesController::class, 'details'])->name('movie.details');
Route::get('/movie/ticket/plan', [MoviesController::class, 'ticketPlan'])->name('movie.ticket-plan');
Route::get('/movie/seat/plan', [MoviesController::class, 'seatPlan'])->name('movie.seat-plan');
Route::get('/movie/checkout', [MoviesController::class, 'checkout'])->name('movie.checkout');
Route::get('/movie/food', [MoviesController::class, 'food'])->name('movie.food');

/* ---------- Events Controller ---------- */
Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/event/details', [EventController::class, 'details'])->name('events.details');
Route::get('/event/speaker/profile', [EventController::class, 'speaker'])->name('events.speaker');
Route::get('/event/ticket', [EventController::class, 'ticket'])->name('events.ticket');
Route::get('/event/checkout', [EventController::class, 'checkout'])->name('events.checkout');

/* ---------- Events Controller ---------- */
Route::get('/sports', [SportController::class, 'index'])->name('sports');
Route::get('/sport/details', [SportController::class, 'details'])->name('sports.details');
Route::get('/sport/ticket', [SportController::class, 'ticket'])->name('sports.ticket');
Route::get('/sport/checkout', [SportController::class, 'checkout'])->name('sports.checkout');

/* ---------- About Controller ---------- */
Route::get('/about', [AboutController::class, 'index'])->name('about');

/* ---------- App Download Controller ---------- */
Route::get('/app-download', [AppDownloadController::class, 'index'])->name('app-download');

/* ---------- Login Controller ---------- */
Route::get('/login-page', [LoginPageController::class, 'loginPage'])->name('login-page');
Route::get('/register-page', [LoginPageController::class, 'registerPage'])->name('register-page');

/* ---------- Page not found Controller ---------- */
Route::get('/page-not-found', [PageNotFoundController::class, 'index'])->name('page-not-found');

/* ---------- Blog Controller ---------- */
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog/details', [BlogController::class, 'details'])->name('blog.details');

/* ---------- Contact Controller ---------- */
Route::get('/contact', [ContactController::class, 'index'])->name('contact');