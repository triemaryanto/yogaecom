<?php

use App\Livewire\Admin\Page\Home;
use App\Livewire\Landing\Page\Home\Home as HomeHome;
use Illuminate\Support\Facades\File;
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

Route::get('template', function () {
    return File::get(public_path() . '/documentation.html');
});

Route::get('/', HomeHome::class)->name('home_depan');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', Home::class)->name('dashboard');
});
