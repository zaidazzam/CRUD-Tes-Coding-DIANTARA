<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\CreateUser; // Import the CreateUser Livewire component


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

Route::get('/dashboard', \App\Http\Livewire\Dashboard::class)->name('dashboard')->middleware('auth');


// Tambahkan route untuk menampilkan halaman index user
// Route::get('/user', [UserController::class, 'index'])->name('user.index')->middleware('auth');
// Route::get('/user/create', [UserController::class, 'create'])->name('user.create')->middleware('auth');
// Route::post('/user', [UserController::class, 'store'])->name('user.store')->middleware('auth');
Route::get('/user/create', CreateUser::class)->name('user.create')->middleware('auth');


require __DIR__.'/auth.php';
