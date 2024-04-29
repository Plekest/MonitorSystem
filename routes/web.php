<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SystemController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('systems', SystemController::class)->names([
    'index' => 'system.index',
    'create' => 'systems.create',
    'store' => 'systems.store',
    'edit' => 'systems.edit',
    'update' => 'systems.update',
    'destroy' => 'systems.destroy',
]);

