<?php

use App\Http\Controllers\ResenasController;
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

Route::get('/', function () {
    return redirect()->route('landingpage.index');
});

Route::resource('landingpage', 'LandingController');
Route::resource('comentarios', 'ComentariosController')->middleware(['guest']);
Route::resource('resenas', 'ResenasController')->middleware(['guest']);
Route::resource('users', 'UsersController')->middleware(['guest', 'normaluser']);

Route::get('register', 'AuthController@register')->name('auth.register');
Route::post('register', 'AuthController@doRegister')->name('auth.do-register');
Route::get('login', 'AuthController@login')->name('auth.login');
Route::post('login', 'AuthController@doLogin')->name('auth.do-login');
Route::any('logout', 'AuthController@logout')->name('auth.logout');
