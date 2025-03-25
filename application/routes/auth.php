<?php
use Laravel\Passport\Http\Controllers\AccessTokenController;
use Laravel\Passport\Http\Controllers\AuthorizationController;
use Laravel\Passport\Http\Controllers\ApproveAuthorizationController;
use Laravel\Passport\Http\Controllers\DenyAuthorizationController;
use Laravel\Passport\Http\Controllers\ClientController;
use Laravel\Passport\Http\Controllers\PersonalAccessTokenController;
use Laravel\Passport\Http\Controllers\ScopeController;
use Illuminate\Support\Facades\Route;

Route::prefix('oauth')->group(function () {
    Route::post('/token', [AccessTokenController::class, 'issueToken'])->middleware(['throttle']);

    Route::post('/authorize', [AuthorizationController::class, 'authorize']);
    Route::post('/approve', [ApproveAuthorizationController::class, 'approve']);
    Route::post('/deny', [DenyAuthorizationController::class, 'deny']);

    Route::resource('/clients', ClientController::class)->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/personal-access-tokens', PersonalAccessTokenController::class)->only(['index', 'store', 'destroy']);
    Route::get('/scopes', [ScopeController::class, 'all']);
});
