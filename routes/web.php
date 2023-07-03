<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;
use App\Http\Controllers\WorkspaceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){ return redirect('/workspace'); });

Route::post('/create', [CardController::class, 'create']);

Route::get('/kanban/{id}', [CardController::class, 'show']);

Route::get('/details/{id}', [CardController::class, 'details'])->name('detalhes');

Route::put('/update/{id}', [CardController::class, 'update']);

Route::delete('/delete/{id}', [CardController::class, 'destroy']);

Route::get('/workspace', [WorkspaceController::class, 'show']);

Route::post('/create/workspace', [WorkspaceController::class, 'create']);

Route::fallback(function (){ return redirect('/workspace'); });





