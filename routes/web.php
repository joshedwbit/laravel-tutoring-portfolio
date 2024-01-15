<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RecentNewsController;
use App\Http\Controllers\ReviewsController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'home']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/recent-news', [RecentNewsController::class, 'news']);
Route::get('/leave-a-review', [ReviewsController::class, 'leaveReview']);
Route::get('/reviews', [ReviewsController::class, 'reviews']);
