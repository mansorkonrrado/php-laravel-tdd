<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

/**
 * Exemplo didático:
 * A rota Resource entende automaticamente os verbos HTTP de cada requisição. Ela simpĺifica a escrita de todas as demais rotas.
 * Logo abaixo, no bloco comentado, são as rotas individuais com seus verbos HTTP. Poderíamos trabalhar com elas também.
 */
Route::apiResource('/users', UserController::class);
// Route::delete('/users/{email}', [UserController::class, 'destroy']);
// Route::put('/users/{email}', [UserController::class, 'update']);
// Route::get('/users/{email}', [UserController::class, 'show']);
// Route::post('/users', [UserController::class, 'store']);
// Route::get('/users', [UserController::class, 'index']);
