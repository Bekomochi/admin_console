<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\adminController;
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
Route::get('accounts/login', [AccountController::class, 'login']);
Route::post('accounts/dologin', [AccountController::class, 'dologin']);
Route::get('accounts/item', [AccountController::class, 'item']);
