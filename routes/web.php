<?php

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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/quanly', [App\Http\Controllers\QuanLyPageController::class, 'index']);

Route::get('{worker}','App\Http\Controllers\WorkerInfomationController@showWorker')->where('worker', '^[a-zA-Z0-9-_\/]+$')->name('slug');;


