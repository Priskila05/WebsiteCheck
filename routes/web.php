<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', function(){
    return view('welcome');
});

Route::group(['middleware'=>['auth', 'ceklevel:Admin']], function(){
    route::get('/pertanyaan', 'HomeController@pertanyaan')->name('pertanyaan');
    route::get('/responden', 'HomeController@responden')->name('responden');
});

Route::group(['middleware'=>['auth', 'ceklevel:Admin,User']], function(){
    route::get('/home', 'HomeController@index')->name('home');
    route::get('/maps', 'HomeController@maps')->name('maps');
    route::get('/check', 'HomeController@check')->name('check');
});

route::resource('question', 'QuestionController');

Route::get('isiKuisioner/input', 'KuisionerController@tampil')->name('isiKuisioner/input');
Route::post('send/answer', 'KuisionerController@postAnswer')->name('send/answer');

Route::get('isiKuisioner/berhasil', 'SuccessController@index')->name('isiKuisioner/berhasil');

Route::get('data/responden', 'RespondenController@dataResponden')->name('data.responden');
Route::get('data/responden/cari', 'RespondenController@cari')->name('data.responden.cari');

