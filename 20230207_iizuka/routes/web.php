<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
//お問い合わせ
Route::GET('/', [ContactController::class,'index']);
Route::POST('/confirm', [ContactController::class,'confirm']);
Route::POST('/thanks', [ContactController::class,'create']);
Route::GET('/search', [ContactController::class,'find']);
Route::POST('/search', [ContactController::class,'search']);
Route::POST('/destroy', [ContactController::class,'destroy']);
