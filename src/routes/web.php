<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AuthSessionController;

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

Route::get('/register', [RegisteredUserController::class, 'create']);
// ユーザー登録情報をデータベースに記憶するためのルーティング
Route::post('/register', [RegisteredUserController::class, 'store']);

// ユーザーログイン処理（認証機能）
Route::get('/login', [AuthSessionController::class, 'store']);
// ユーザーログアウト処理
Route::post('/login', [AuthSessionController::class, 'destroy']);

// 打刻機能
Route::get('/attendance', function() {
    return view('attendance');
});
Route::get('/', function() {
    return view('/');
});



