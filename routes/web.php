<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;;

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
    return view('home');
});
Route::get('/table', function () {
    return view('tables.table');
});
Route::get('/edit', function () {
    return view('tables.edit');
});


Route::resource('table', TableController::class);
// Route::get('/posts', [TableController::class, 'index']);

