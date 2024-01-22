<?php

use App\Http\Controllers\PessoaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/index', [PessoaController::class,'index'])->name('api.index');
Route::post('/store', [PessoaController::class,'store'])->name('api.store');
Route::get('/edit/{id}', [PessoaController::class,'edit'])->name('api.edit');
Route::delete('/delete/{id}', [PessoaController::class,'destroy'])->name('api.destroy');
Route::put('/update/{id}', [PessoaController::class,'update'])->name('api.update');
