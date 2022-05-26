<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

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

// お問い合わせ入力ページ
// Route::get('/', 'ContactsController@index')->name('contact');
Route::get('/contact', [ContactsController::class, 'contact']);
// Route::get('/', 'App\Http\Controllers\ContactsController@contact' );

// 確認ページ
// Route::post('/confirm', 'ContactsController@confirm')->name('confirm');
Route::post('/confirm', [ContactsController::class, 'confirm']);
// Route::get('/confirm', 'App\Http\Controllers\ContactsController@confirm' );

// DB挿入、メール送信
// Route::post('/process', 'ContactsController@process')->name('process');
Route::post('/process', [ContactsController::class, 'process']);
// Route::get('/process', 'App\Http\Controllers\ContactsController@process' );

// 完了ページs

// Route::get('/complete', 'ContactsController@complete')->name('complete');
 Route::get('/complete', [ContactsController::class, 'complete']);
// Route::get('/complete', 'App\Http\Controllers\ContactsController@complete' );