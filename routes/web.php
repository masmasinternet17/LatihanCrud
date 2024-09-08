<?php

use App\Http\Controllers\DasboardController;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/login' , [LoginController::class, 'index'])->name('Login');
Route::post('/login', [LoginController::class, 'login'])->name('loginAction');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/' , [DasboardController::class, 'Dashboard1'])->name('Dashboard1');
    Route::get('/Dashboard2' , [DasboardController::class, 'Dashboard2'])->name('Dashboard2');
});