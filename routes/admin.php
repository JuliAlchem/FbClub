<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TeamController;

Route::get('', [HomeController::class, 'index' ])->name('admin.home');

Route::resource('team', TeamController::class)->names('admin.teams');

