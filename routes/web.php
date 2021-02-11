<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/create',[App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users',[App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');

Route::get('/boleto/create',[App\Http\Controllers\TicketController::class, 'create'])->name('boleto.create');
Route::post('/boleto',[App\Http\Controllers\TicketController::class, 'store'])->name('boleto.store');
Route::get('/boleto', [App\Http\Controllers\TicketController::class, 'index'])->name('boleto.index');
Route::get('/boleto/{tickets}', [App\Http\Controllers\TicketController::class, 'show'])->name('boleto.show');
Route::get('/boleto/{tickets}/edit', [App\Http\Controllers\TicketController::class, 'edit'])->name('boleto.edit');
Route::put('/boleto/{tickets}', [App\Http\Controllers\TicketController::class, 'update'])->name('boleto.update');
Route::delete('/boleto/{tickets}', [App\Http\Controllers\TicketController::class, 'destroy'])->name('boleto.delete');
