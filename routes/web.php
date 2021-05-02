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

Route::get('/', function () {
    return view('front.index');
})->name('home');

Route::get('/login',    'LoginController@index')->name('login');
Route::post('/login',   'LoginController@attempt')->name('login.attempt');
Route::get('/logout',   'LoginController@logout')->name('logout');

// Registration
Route::get('/register',  'RegisterController@index')->name('register');
Route::post('/register', 'RegisterController@store')->name('register.store');

Route::get('locale/{locale}', 'PageController@locale')->name('locale');

// Verify email
Route::get('/verify/{token}',   'AuthController@verify')->name('verify'); 

// Forgot email
Route::get('/forgot',           'AuthController@forgot')->name('forgot');
Route::post('/forgot',          'AuthController@submit')->name('forgot.submit');

// Reset email

Route::get('/reset/{token}',    'AuthController@reset')->name('reset');
Route::post('/reset',           'AuthController@new_password')->name('reset.submit');


Route::get('/about',          'PageController@about')->name('about');
Route::get('/how-it-works',   'PageController@how_it_works')->name('how-it-works');
Route::get('/contact',        'PageController@contact')->name('contact');



Route::prefix('dashboard')->group(function () {
    Route::get('/', 'PageController@dashboard')->name('dashboard');

    Route::get('/languages',    'LanguageController@index')->name('dashboard.languages');
    Route::get('/translations', 'TranslationController@index')->name('dashboard.translations');


    Route::prefix('language')->group(function () {
        Route::post('/store',        'LanguageController@store')->name('language.store');
        Route::get('/edit/{l}',      'LanguageController@edit')->name('language.edit');
        Route::post('/update/{l}',   'LanguageController@update')->name('language.update');
        Route::get('/destroy/{l}',   'LanguageController@destroy')->name('language.destroy');
    });

    Route::prefix('translation')->group(function () {
        Route::post('/store',        'TranslationController@store')->name('translation.store');
        Route::get('/edit/{t}',      'TranslationController@edit')->name('translation.edit');
        Route::post('/update/{t}',   'TranslationController@update')->name('translation.update');
    });
});
