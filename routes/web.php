<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


/* Route::post('○○/□□'～);の['○○/□□']はurl
 * formのurl関数に記入する
 */

//ルーティング


//パラメータ付きルーティング
//Route::get('accounts/index/{account_id}', [AccountController::class, 'index']);

//条件指定も全て表示も対応させる
//Route::get('accounts/index/{account_id?}', [AccountController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('accounts/index', [AccountController::class, 'index']);

Route::post('accounts/dologin', [AccountController::class, 'dologin']);
Route::get('accounts/login', [AccountController::class, 'login']);

Route::get('accounts/logout', [AccountController::class, 'logout']);
Route::post('accounts/dologout', [AccountController::class, 'dologout']);

Route::get('Admin/item', [AdminController::class, 'item']);
Route::get('Admin/player', [AdminController::class, 'player']);
Route::get('Admin/having', [AdminController::class, 'having']);
