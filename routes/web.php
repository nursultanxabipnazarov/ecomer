<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
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

Route::get('/', function () {
    return view('home.index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/dash',[MainController::class,'dash']);
Route::get('view-category',[AdminController::class,'viewCategory'])->name('viewCategory');
Route::post('add-category',[AdminController::class,'addCategory'])->name('addCategory');
Route::delete('delete-category/{id}',[AdminController::class,'destroyCategory'])->name('destroyCategory');
