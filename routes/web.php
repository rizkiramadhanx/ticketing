<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\EndUserController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketTypeController;
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
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'login_view'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('user.login');

Route::get('/buat-keperluan', [EndUserController::class, 'index'])->name('create_ticket');
Route::post('/buat-keperluan', [EndUserController::class, 'store'])->name('create_ticket.store');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('user.home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/ticket', [TicketController::class, 'index'])->name('ticket.index');
    Route::get('/ticket/create', [TicketController::class, 'create'])->name('ticket.create');
    Route::post('/ticket', [TicketController::class,'store'])->name('ticket.store');
    Route::get('/ticket/{id}/edit', [TicketController::class,'edit'])->name('ticket.edit');
    Route::post('/ticket/{id}', [TicketController::class,'update'])->name('ticket.update');
    Route::delete('/ticket/{id}', [TicketController::class,'destroy'])->name('ticket.destroy');

    Route::get('/ticket-type', [TicketTypeController::class, 'index'])->name('ticket_type.index');
    Route::get('/ticket-type/create', [TicketTypeController::class, 'create'])->name('ticket_type.create');
    Route::post('/ticket-type', [TicketTypeController::class,'store'])->name('ticket_type.store');
    Route::get('/ticket-type/{id}/edit', [TicketTypeController::class,'edit'])->name('ticket_type.edit');
    Route::post('/ticket-type/{id}', [TicketTypeController::class,'update'])->name('ticket_type.update');
    Route::delete('/ticket-type/{id}', [TicketTypeController::class,'destroy'])->name('ticket_type.destroy');

    Route::get('/division', [DivisionController::class, 'index'])->name('division.index');
    Route::get('/division/create', [DivisionController::class, 'create'])->name('division.create');
    Route::post('/division', [DivisionController::class,'store'])->name('division.store');
    Route::get('/division/{id}/edit', [DivisionController::class,'edit'])->name('division.edit');
    Route::post('/division/{id}', [DivisionController::class,'update'])->name('division.update');
    Route::delete('/division/{id}', [DivisionController::class,'destroy'])->name('division.destroy');
    
});