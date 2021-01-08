<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, "index"])->name('index');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
