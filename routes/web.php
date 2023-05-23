<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add', function () {
    return view('add');
});
Route::get('/showAdmin', function () {
    return view('showadmin');
});
Route::post('/add_process', 'ArtikelController@add_process');
Route::get('/', 'ArtikelController@show');
Route::get('/test', function() {
    return view('master');
});
Route::get('/detail/{id}', 'ArtikelController@detail');
Route::get('/author', 'ArtikelController@show_by_penulis');
Route::get('/edit/{id}', 'ArtikelController@edit');
Route::post('/edit_process', 'ArtikelController@edit_process');
Route::get('/delete/{id}', 'ArtikelController@delete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');