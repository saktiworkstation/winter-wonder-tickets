<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketDashboardController;
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

Route::resource('/dashboard/tickets', TicketDashboardController::class)->middleware('auth');
