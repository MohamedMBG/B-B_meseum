<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/Login', [UserController::class, "afflogin"])->name('login');
Route::post('/Login', [UserController::class, "login"])->name('login.submit');
Route::get('/Signup', [UserController::class, "affsignup"])->name('signup');
Route::post('/Signup', [UserController::class, "signup"])->name('signup.submit');
Route::get('/Home', [UserController::class, "affhome"])->name('home');


// Cette ligne définit une route GET pour l'URL '/artists'.
// Lorsque cette URL est visitée, la méthode 'showArtists' du 'UserController' sera appelée.

Route::get('/artists', [UserController::class, 'showArtists'])->name('artists');


// Cette ligne définit une route GET pour l'URL '/artowrks'.
// Lorsque cette URL est visitée, la méthode 'showArtworks' du 'ArtworkController' sera appelée.
Route::get('/artworks', [ArtworkController::class, 'showArtworks']);
Route::get('/upload', [CategorieController::class, 'uploadArtwork']);

Route::get('/profile', [UserController::class, 'show'])->name('user.profile');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/upload', [ArtworkController::class, 'create'])->name('upload.form');
Route::post('/upload', [ArtworkController::class, 'store'])->name('upload.submit');

Route::post('/Home', [CommentController::class, "storeComment"])->name('comment.store');
