<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TicketController;
use App\Models\Ticket;
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
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login_view'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('user.login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('user.home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/ticket', [TicketController::class, 'index'])->name('ticket.index');
    Route::get('/ticket/create', [TicketController::class, 'create'])->name('ticket.create');
    Route::post('/ticket', [TicketController::class,'store'])->name('ticket.store');
    Route::get('/ticket/{id}/edit', [TicketController::class,'edit'])->name('ticket.edit');
    Route::post('/ticket/{id}', [TicketController::class,'update'])->name('ticket.update');
    Route::delete('/ticket/{id}', [TicketController::class,'destroy'])->name('ticket.destroy');
});