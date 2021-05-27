<?php

use App\Http\Controllers\ResenasController;
use Illuminate\Support\Facades\Route;
use App\Events\LikeEvent;
use Laravel\Socialite\Facades\Socialite;


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

//Ruta para crear eventos en broadcast
Route::get('/event/{comment}/{id_escritor}/{id_usuario}', function ($comment, $id_escritor, $id_usuario) {
    event(new LikeEvent($comment, $id_escritor, $id_usuario));
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
Route::get('showUser/{resena}', 'ResenasController@showUser')->name('resena.show-user');
Route::put('showUser/likes/{resena}', 'ResenasController@updateLikes');
Route::get('landingpageSearch', 'LandingController@search')->name('landingpage.search');
Route::put('/user/{id}', [ResenasController::class, 'updateLikes'])->name('resena.likes');

Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/callback', function () {
    $user = Socialite::driver('github')->user();

    // OAuth 2.0 providers...
    $token = $user->token;
    $refreshToken = $user->refreshToken;
    $expiresIn = $user->expiresIn;

    // OAuth 1.0 providers...
    $token = $user->token;
    $tokenSecret = $user->tokenSecret;

    // All providers...
    $user->getId();
    $user->getNickname();
    $user->getName();
    $user->getEmail();
    $user->getAvatar();
});
