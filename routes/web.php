<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketDashboardController;
use App\Http\Controllers\UserTicketController;
use App\Models\TicketType;
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

Route::get('/', function () {
    return view('homepage', [
        'tickets' => TicketType::latest()->paginate('6'),
    ]);
});
Route::get('/detail-ticket/{ticketType:id}', [TicketController::class, 'detail']);
Route::get('/promotions', [PromotionController::class, 'index']);

Route::post('/authenticate', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/register', [AuthController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/tickets', [TicketDashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/tickets/create', [TicketDashboardController::class, 'create'])->middleware('auth');
Route::post('/dashboard/tickets/create', [TicketDashboardController::class, 'store'])->middleware('auth');

Route::get('/dashboard/tickets/edit/{ticketType:id}', [TicketDashboardController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/tickets/edit/{ticketType:id}', [TicketDashboardController::class, 'update'])->middleware('auth');

Route::delete('/dashboard/tickets/delete/{ticketType:id}', [TicketDashboardController::class, 'destroy'])->middleware('auth');

Route::post('/dashboard/user-tickets/create', [UserTicketController::class, 'buy'])->middleware('auth');
