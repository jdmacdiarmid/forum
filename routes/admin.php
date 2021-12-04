<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

//Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'admin', 'as' => 'admin.'], static function () {
//
//});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], static function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
});