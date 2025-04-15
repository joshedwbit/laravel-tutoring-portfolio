<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RecentNewsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'homeV2'])->name('home');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/recent-news', [RecentNewsController::class, 'news'])->name('recent-news');
Route::get('/leave-a-review', [ReviewsController::class, 'leaveReview'])->name('leave-a-review');

// Reviews related routes
Route::get('/reviews', [ReviewsController::class, 'reviews'])->name('reviews');
Route::post('/review-submitted', [ReviewsController::class, 'submission'])->name('review-submitted');
Route::get('/review-thanks', [ReviewsController::class, 'thanks'])->name('review-thanks');

// User related routes
Route::get('/login', [userController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/user-login', [UserController::class, 'userLogin']);

// Resource related routes
Route::get('/resources', [ResourcesController::class, 'resources']);
Route::post('/resources-submitted', [ResourcesController::class, 'submission']);
Route::get('/edit-resource/{paper}', [ResourcesController::class, 'editResource']);
Route::put('/edit-resource/{paper}', [ResourcesController::class, 'updateResource']);
Route::delete('/delete-resource/{paper}', [ResourcesController::class, 'deleteResource']);
Route::post('/resources-filtered', [ResourcesController::class, 'filter']);

Route::get('/home', [HomeController::class, 'homeV2'])->name('home');
Route::redirect('/new-home', '/home');
Route::get('/new-resources', [ResourcesController::class, 'resourcesV2']);
