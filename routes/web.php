<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\TeamController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('', function() {
        return redirect()->route('be.dashboard');
    });

    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('be.dashboard');

    Route::match(['get', 'post'], 'menus', [AdminController::class, 'menus'])->name('be.menu');

    Route::match(['get', 'post'], 'configs', [AdminController::class, 'configs'])->name('be.config');

    Route::match(['get', 'post'], 'home', [AdminController::class, 'home'])->name('be.config.home');

    Route::as('be.')->group(function() {
        Route::resource('galleries', GalleryController::class);

        Route::resource('blogs', BlogController::class);

        Route::resource('services', ServiceController::class);

        Route::resource('feedbacks', FeedBackController::class);

        Route::resource('teams', TeamController::class);
    });

    Route::get('requests', [RequestController::class, 'index'])->name('be.request.index');
});





Route::get('login', [AuthController::class, 'login'])->name('fe.login');
Route::post('login', [AuthController::class, 'authenticate'])->name('fe.login.action');
Route::get('logout', [AuthController::class, 'logout'])->name('fe.logout');

Route::get('', [HomeController::class, 'home'])->name('fe.home');
Route::get('about-us', [HomeController::class, 'aboutUs'])->name('fe.about-us');
Route::get('contact', [HomeController::class, 'contact'])->name('fe.contact');

Route::prefix('blogs')->group(function() {
    Route::get('', [HomeController::class, 'blogs'])->name('fe.blog.list');
    Route::get('{id}', [HomeController::class, 'blog'])->name('fe.blog.detail');
    Route::post('{id}/comment', [HomeController::class, 'blogCmt'])->name('fe.blog.cmt');
});

Route::get('search', [HomeController::class, 'search'])->name('fe.search');

Route::get('about-us', [HomeController::class, 'about'])->name('fe.about');

Route::get('contact', [HomeController::class, 'contact'])->name('fe.contact');

Route::get('teams', [HomeController::class, 'teams'])->name('fe.team');
Route::get('teams/{id}', [HomeController::class, 'team'])->name('fe.team.detail');

Route::post('requests/store', [RequestController::class, 'store'])->name('fe.request.store');

