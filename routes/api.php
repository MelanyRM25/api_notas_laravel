<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/login', [App\Http\Controllers\UserController::class, 'login']);

//mapean las solicitudes HTTP (GET, POST, PUT, DELETE) a los métodos correspondientes de un controlador.
Route::get('/notes', [App\Http\Controllers\NoteController::class, 'index']); //GET
Route::post('/notes', [App\Http\Controllers\NoteController::class, 'store']); 
Route::get('/notes/{id}', [App\Http\Controllers\NoteController::class, 'show']); 
Route::put('/notes/{id}', [App\Http\Controllers\NoteController::class, 'update']);
Route::delete('/notes/{id}', [App\Http\Controllers\NoteController::class, 'destroy']);