<?php

use App\Http\Controllers\Frontend\Events\EventController;
use App\Http\Controllers\Frontend\Home\HomePageController;
use App\Http\Controllers\Frontend\Movies\MoviesController;
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

/* ---------- Movies Controller ---------- */
Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/event/details', [EventController::class, 'details'])->name('events.details');
Route::get('/event/speaker/profile', [EventController::class, 'speaker'])->name('events.speaker');

