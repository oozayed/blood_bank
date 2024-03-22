<?php

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Content\{CategoryController, PostController};
use App\Http\Controllers\Admin\General\{BloodTypeController,
    SettingsController,
    GovernorateController,
    CityController
};
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

Route::get('/', DashboardController::class)->name('index');


Route::prefix('general')->as('general.')->group(function () {
    Route::controller(SettingsController::class)->prefix('settings')
        ->as('settings.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::put('/', 'update')->name('update');
        });
    Route::resource('governorates', GovernorateController::class)->except('show');
    Route::resource('cities', CityController::class)->except('show');
    Route::resource('blood-types', BloodTypeController::class)->except('show');
});

Route::prefix('content')->as('content.')->group(function () {
    Route::resource('categories', CategoryController::class)->except('show');
    Route::resource('posts', PostController::class);
});
Route::get('clients/data', [ClientController::class, 'dataTable'])->name('clients.dataTable');
Route::get('clients/status/{client}', [ClientController::class, 'status'])->name('clients.status');
Route::resource('clients', ClientController::class)->except('show', 'edit', 'update','store','create');

