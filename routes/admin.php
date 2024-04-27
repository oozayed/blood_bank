<?php

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('clients/dataTable', [ClientController::class, 'dataTable'])->name('clients.dataTable');
Route::get('clients/status/{client}', [ClientController::class, 'status'])->name('clients.status');
Route::resource('clients', ClientController::class)->only('index','destroy');


Route::get('contacts/dataTable', [ContactController::class, 'dataTable'])->name('contacts.dataTable');
Route::resource('contacts', ContactController::class)->only('index','show','destroy');


Route::get('donations/dataTable', [DonationController::class,'dataTable'])->name('donations.dataTable');
Route::resource('donations', DonationController::class)->only('index','show','destroy');

Route::get('change-password', [LoginController::class, 'editPassword'])->name('password.edit');
Route::post('change-password', [LoginController::class, 'updatePassword'])->name('password.update');
Route::resource('users', UserController::class)->except('show');
