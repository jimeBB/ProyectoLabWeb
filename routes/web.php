<?php

use App\Http\Controllers\ResenasController;
use Illuminate\Support\Facades\Route;
use App\Events\LikeEvent;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;


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

Route::get('/auth/facebook/redirect', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('/auth/facebook/callback', function () {
    $fbUser = Socialite::driver('github')->user();

    $token = $fbUser->token;
    $refreshToken = $fbUser->refreshToken;
    $expiresIn = $fbUser->expiresIn;

    $user = User::where('provider_id', $fbUser->getId())->first();

    if (!$user) {
        $user = User::create([
            'email' => $fbUser->getEmail(),
            'name' => $fbUser->getName(),
            'lname' => '',
            'password' => '',
            'provider_id' => $fbUser->getId(),
            'provider' => 'github',
        ]);
    }

    Auth::login($user, true);

    return redirect()->route('landingpage.index');
});

Route::get('/auth/github/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/github/callback', function () {
    $gitUser = Socialite::driver('github')->user();

    $token = $gitUser->token;
    $refreshToken = $gitUser->refreshToken;
    $expiresIn = $gitUser->expiresIn;

    $user = User::where('provider_id', $gitUser->getId())->first();

    if (!$user) {
        $user = User::create([
            'email' => $gitUser->getEmail(),
            'name' => $gitUser->getName(),
            'lname' => '',
            'password' => '',
            'provider_id' => $gitUser->getId(),
            'provider' => 'github',
        ]);
    }

    Auth::login($user, true);

    return redirect()->route('landingpage.index');
});
