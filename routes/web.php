<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BbsController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [BbsController::class, 'index'] )->name('index');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [HomeController::class,'index']);
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/home/add', [HomeController::class,'showAddBbForm'])->name('bb.add');


Route::get('/home/{bb}/edit', [НomeController::class, 'edit'])->name('bb.edit');
Route::patch('/hоmе/{bb}', [HomeController::class, 'updateBb'])->name( 'bb.update');




Route::get('/hоmе/{bb}/delete', [HomeController::class, 'showDeleteBbForm'])->name( 'bb.delete');
Route::delete('/hоmе/{bb}', [HomeController::class, 'destroyBb'])->name( 'bb.destroy');
Route::post('/home', [HomeController::class, 'storeBb'])->name('bb.store');




Route::get('/{bb}', [BbsController::class, 'detail'])->name('detail');