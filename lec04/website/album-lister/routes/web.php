<?php

use App\Http\Controllers\AlbumController;
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

Route::get('/', [AlbumController::class, "index"])->name("albums.index");

Route::get('/create', [AlbumController::class, "create"])->name("albums.create");

Route::post('/new', [AlbumController::class, "new"])->name("albums.new");

