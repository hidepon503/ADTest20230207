<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
//お問い合わせ
Route::get('/', [ContactController::class,'index']);
Route::post('/contact/confirm', [ContactController::class,'confirm']);
Route::post('/contact/thanks', [ContactController::class,'create']);
Route::get('/contact/find', [ContactController::class,'find']);
Route::get('/contact/search', [ContactController::class,'search']);
Route::post('/contact/delete', [ContactController::class,'delete']);
