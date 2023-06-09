<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
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

Route::get('/', HomeController::class);

Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/product-1', [ProductController::class, 'product1']);
    Route::get('/product-2', [ProductController::class, 'product2']);
    Route::get('/product-3', [ProductController::class, 'product3']);
    Route::get('/product-4', [ProductController::class, 'product4']);
});

//Route::get('/news', [NewsController::class, 'index']);
//Route::get('/news/{title}', [NewsController::class, 'show'] );

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{slug}', [NewsController::class, 'show']);

Route::prefix('/program')->group(function () {
    Route::get('/', [ProgramController::class, 'index']);
    Route::get('/program-1', [ProgramController::class, 'program1']);
    Route::get('/program-2', [ProgramController::class, 'program2']);
    Route::get('/program-3', [ProgramController::class, 'program3']);
    Route::get('/program-4', [ProgramController::class, 'program4']);
});

Route::get('/about-us', AboutUsController::class);

Route::resource('contact-us', ContactUsController::class)->only(['index', 'store']);
