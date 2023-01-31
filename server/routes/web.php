<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;
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
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'viewLogin'])->name('viewLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::group(['middleware' => ['auth:web']], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['controller' => AdminController::class, 'prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'viewCreate')->name('viewCreate');
        Route::post('/create', 'create')->name('create');
        Route::get('/delete/{userId}', 'delete')->name('delete');
    });

    Route::get('/member', [MemberController::class, 'index'])->name('member.index');
});
