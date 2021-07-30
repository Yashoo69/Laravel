<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [NavController::class, 'welcome']);

Route::get('/blog', [NavController::class, 'blog']);

Route::get('/books', [NavController::class, 'books']);

Route::get('/formbook', [NavController::class, 'addBook']);

Route::get('/addBook', [ActionController::class, 'addBook']);

Route::get('/infoBook', [NavController::class, 'infoBook']);

