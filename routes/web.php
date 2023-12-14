<?php

use App\Http\Controllers\ProtectorsSpamReportsController;
use App\Http\Controllers\UsersSpamReportsController;
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
    return redirect('/users/reports');
});

Route::get('users/reports', UsersSpamReportsController::class);
Route::resource('protectors/reports', ProtectorsSpamReportsController::class);
