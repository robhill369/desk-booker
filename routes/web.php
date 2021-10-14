<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

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

// Route::get('/', function () {
//     return view('index');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [RoomController::class, 'index']);

Route::get('book', [BookingController::class, 'create']);
Route::post('book', [BookingController::class, 'store']);

Route::get('admin/create-room', [RoomController::class, 'create'])
            ->middleware(['admin'])
            ->name('create-room');
Route::post('admin/create-room', [RoomController::class, 'store'])->middleware(['admin']);



