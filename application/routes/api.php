<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

// Rotas públicas
Route::post('/login', [AuthController::class, 'login']);
// Route::get('/teste', function () {
//     return response()->json(['message' => 'API funcionando!']);
// });
Route::get('/teste', function () {
    return response()->json([
        "message" => "API funcionando!",
        "user" => [
            "id" => 1,
            "name" => "João Silva",
            "email" => "joao@email.com",
            "created_at" => "2024-03-13T12:00:00.000000Z",
            "updated_at" => "2024-03-13T12:00:00.000000Z"
        ]
    ]);
});

// Rotas protegidas
Route::middleware('auth:api')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);

    // Rotas relacionadas a usuários
    Route::apiResource('users', UserController::class);
});