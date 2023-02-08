<?php

//chapter7 ルート定義を作成する
use App\Book;
use Illuminate\Http\Request; 

//課題2.1
//本ダッシュボード表示
Route::get('/', 'BooksController@index');

//登録処理
Route::post('/books','BooksController@store');

//課題1.1, 2.2
//更新画面
Route::post('/booksedit/{books}','BooksController@edit');

//課題1.2
//更新処理
Route::post('/books/update','BooksController@update');

//課題2.3
//本を削除
Route::delete('/book/{book}','BooksController@destroy');

//Auth
Auth::routes(); //chapter8 ログイン認証機能を呼び出す
Route::get('/home', 'BooksController@index')->name('home'); //chapter16 ログイン/ユーザー登録後に登録/一覧画面を表示

