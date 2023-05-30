<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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


// posts
Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('feed', [\App\Http\Controllers\PostController::class, 'feed'])->name('posts.feed');
//
Route::resource('posts', \App\Http\Controllers\PostController::class)->only([
    'create',
    'edit',
    'update',
    'store',
    'destroy',
]);
//
Route::patch('posts/{post}/restore', [\App\Http\Controllers\PostController::class, 'restore'])->name('posts.restore');
Route::delete('posts/{post}/force-delete', [\App\Http\Controllers\PostController::class, 'forceDelete'])->name('posts.force-delete');


// users


Route::get('users/people', [\App\Http\Controllers\UserController::class, 'people'])
    ->name('users.people');

// users friend

Route::resource('user-friends', \App\Http\Controllers\UserFriendController::class)
    ->only([
        'store'
    ])
    ->names([
        'store' => 'users-friend.store'
    ]);



require __DIR__.'/auth.php';
