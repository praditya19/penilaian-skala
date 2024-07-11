<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SelfEsteemAnswerController;
use App\Http\Controllers\FamilySupportAnswerController;
use App\Http\Controllers\AdjustmentAnswerController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/self-esteem-form', [SelfEsteemAnswerController::class, 'index']);
Route::post('/self-esteem-answers', [SelfEsteemAnswerController::class, 'store']);
Route::get('/self-esteem/result/{id}', [SelfEsteemAnswerController::class, 'result'])
    ->name('self-esteem.result');

Route::get('/family-support-form', [FamilySupportAnswerController::class, 'index']);
Route::post('/family-support-answers', [FamilySupportAnswerController::class, 'store']);
Route::get('/family-support/result/{id}', [FamilySupportAnswerController::class, 'result'])
    ->name('family-support.result');

Route::get('/adjustment-form', [AdjustmentAnswerController::class, 'index']);
Route::post('/adjustment-answers', [AdjustmentAnswerController::class, 'store']);
Route::get('/adjustment/result/{id}', [AdjustmentAnswerController::class, 'result'])
    ->name('adjustment.result');
