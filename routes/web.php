<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController as PageController;

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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');

Route::get('/about-us', [PageController::class, 'about'])->name('about');

Route::get('/details-movie/{id}', [PageController::class, 'details'])->name('details');
