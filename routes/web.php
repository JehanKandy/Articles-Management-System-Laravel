<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'verify' => true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin', function(){
    return view('admin');
})->name('admin')->middleware('admin');

Route::get('staff', function(){
    return view('staff');
})->name('staff')->middleware('staff');

Route::get('client', function(){
    return view('client');
})->name('client')->middleware('client');

Route::resource("/users", MemberController::class);

// Route::get('/articles', [ArticleController::class, 'index']);

// Route::get('/articles/create',function(){
//     return view('articles.create');
// });
// Route::post('/articles', [ArticleController::class, 'store']);

Route::resource("/articles", ArticleController::class);