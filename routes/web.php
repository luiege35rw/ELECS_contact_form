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
// Route::get('/contact', [ContactController::class, 'index']);
// Route::get('/', 'App\Http\Controllers\ContactsController@index')->name(‘contact’);

Route::get('/', [ContactsController::class, 'index'])->name('contact.index');


// 確認ページ
// Route::post('/confirm', 'ContactsController@confirm')->name('confirm');
// Route::post('/contact/confirm', [ContactsController::class, 'confirm']);
// Route::get('/confirm', 'App\Http\Controllers\ContactsController@confirm')->name(‘confirm’);

Route::get('/confirm', [ContactsController::class, 'confirm'])->name('confirm');

// DB挿入、メール送信
// Route::post('/process', 'ContactsController@process')->name('process');
// Route::post('contact/process', [ContactsController::class, 'process']);
// Route::get('/process', 'App\Http\Controllers\ContactsController@process')->name(‘process’);

Route::get('/process', [ContactsController::class, 'process'])->name('process');

// 完了ページ

// Route::get('/complete', 'ContactsController@complete')->name('complete');
//  Route::get('contact/complete', [ContactsController::class, 'complete']);
// Route::get('/complete', 'App\Http\Controllers\ContactsController@complete')->name(‘complete’);

Route::get('/complete', [ContactsController::class, 'complete'])->name('complete');