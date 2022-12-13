<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\FormController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/table', [TableController::class, 'index'])->name('table');
Route::get('/datatable/1', [TableController::class, 'datatable1'])->name('datatable.1');
Route::get('/datatable/2', [TableController::class, 'datatable2'])->name('datatable.2');
Route::get('/upload', [UploadController::class, 'index'])->name('upload');
Route::get('/form/layout', [FormController::class, 'layout'])->name('form.layout');
