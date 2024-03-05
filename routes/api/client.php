<?php

use App\Http\Controllers\Api\Client\{
    DonationController, NotificationController,
    PostController, ProfileSettingsController,
    AuthController,GeneralRequestsController,
    ResetPasswordController
};
use Illuminate\Support\Facades\Route;


// General Requests
Route::controller(GeneralRequestsController::class)->group(function () {
    Route::get('blood-types','bloodTypes');
    Route::get('governorates','governorates');
    Route::get('governorate/{id}/cities','governorateCities');
    Route::get('settings','settings');
    Route::get('categories','categories');
    Route::post('contact-us','contactUs')->middleware('auth:sanctum');
});





// Auth
Route::controller(AuthController::class)->group(function () {
    Route::post('register','register');
    Route::post('login','login');
    Route::post('logout','logout')->middleware('auth:sanctum');
});


// Reset Password
Route::controller(ResetPasswordController::class)->group(function () {
    Route::post('set-new-password','setNewPassword');
    Route::post('check-if-phone-is-exist','checkIfPhoneIsExist');
});

//  Posts
Route::controller(PostController::class)->middleware('auth:sanctum')->group(function () {
    Route::get('get-posts','index');
    Route::post('like-or-dislike-post/{id}','likePost');
    Route::get('liked-posts','likedPosts');
});



//donation request
Route::controller(DonationController::class)->middleware('auth:sanctum')->group(function () {
    Route::get('donation-request','index');
    Route::post('donation-request','store');
    Route::get('donation-request/{id}','show');
    Route::put('donation-request/{id}','update');
    Route::delete('donation-request/{id}','destroy');
});

//profile
Route::controller(ProfileSettingsController::class)->middleware('auth:sanctum')->group(function () {
    Route::get('profile-settings','show');
    Route::put('profile-settings','update');
});

//notification
Route::controller(NotificationController::class)->middleware('auth:sanctum')->group(function () {
    Route::get('notifications','index');
});
