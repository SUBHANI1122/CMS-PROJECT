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
Route::get('/', [App\Http\Controllers\HomeController::class, 'home_page']);
Auth::routes();
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/store/media_files', [App\Http\Controllers\AjaxController::class, 'store_media_files'])->name('store_media_files');
Route::post('/remove/media_files', [App\Http\Controllers\AjaxController::class, 'remove_media_files'])->name('remove_media_files');
Route::group(['middleware' => ['auth']], function () {
    Route::resources([
        'slider' => \App\Http\Controllers\SliderController::class,
        'testimonial' => \App\Http\Controllers\TestimonialController::class,
        'team' => \App\Http\Controllers\TeamController::class,
        'services' => \App\Http\Controllers\ServiceController::class,
        'news' => \App\Http\Controllers\NewsController::class,
    ]);
});
