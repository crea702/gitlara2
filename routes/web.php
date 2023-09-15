<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => '\App\Http\Controllers\Post'], function(){
    Route::get('/posts', 'IndexController')->name('posts.index');
    Route::get('/posts/create', 'CreateController')->name('posts.create');

    Route::post('/posts', 'StoreController')->name('posts.store');
    Route::get('/posts/{post}','ShowController')->name('posts.show');
    Route::get('/posts/{post}/edit','EditController')->name('posts.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('posts.update');
    Route::delete('/posts/{post}','DestroyController')->name('posts.delete');
});




Route::get('/posts/update', [\App\Http\Controllers\PostController::class, 'update']);
Route::get('/posts/delete', [\App\Http\Controllers\PostController::class, 'delete']);
Route::get('/posts/restore', [\App\Http\Controllers\PostController::class, 'restore']);
Route::get('/posts/first_or_create', [\App\Http\Controllers\PostController::class, 'firstOrCreate']);
Route::get('/posts/update_or_create', [\App\Http\Controllers\PostController::class, 'updateOrCreate']);

Route::get('/main', [\App\Http\Controllers\MainController::class, 'index'])->name('main.index');
Route::get('/contacts', [\App\Http\Controllers\ContatsController::class, 'index'])->name('contact.index');
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about.index');


