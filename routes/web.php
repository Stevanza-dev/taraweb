<?php

use App\Http\Controllers\Admin\AdvantageController;
use App\Http\Controllers\Admin\PricingPlanController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');

    // Admin Content Management
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('services', ServiceController::class);
        Route::resource('pricing', PricingPlanController::class)->parameters(['pricing' => 'pricing']);
        Route::resource('advantages', AdvantageController::class);
        Route::resource('projects', ProjectController::class);
    });
});

require __DIR__.'/settings.php';
