<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'administrator', 'middleware' => ['auth', 'role:admin']],
function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/profile', function () {
        return view('admin.profile');
    });
    Route::get('/button', function () {
        return view('admin.button');
    });
    Route::resource('author', AuthorController::class);
    Route::resource('book', BookController::class);
});

Route::group(['prefix' => 'member', 'middleware' => ['auth']],
function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index2'])->name('home2');
    Route::get('/', function () {
        return view('member.index');
    });
});
