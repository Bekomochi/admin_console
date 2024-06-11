<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;


/*Route::post('○○/□□'～);の['○○/□□']はurl
 * loginviewのformのurl関数に記入する
 */

//ルーティング
Route::get('/', function () {
    return view('welcome');
});
Route::get('accounts/index', [AccountController::class, 'index']);

//パラメータ付きルーティング
//Route::get('accounts/index/{account_id}', [AccountController::class, 'index']);

//条件指定も全て表示も対応させる
//Route::get('accounts/index/{account_id?}', [AccountController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('accounts/login', [AccountController::class, 'login']);

Route::post('accounts/dologin', [AccountController::class, 'dologin']);

Route::get('accounts/index', function () {
    return view('welcome');
});
Route::get('admin/item', [\App\Providers\adminController::class, 'item']);
