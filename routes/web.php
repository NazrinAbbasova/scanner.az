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
});

Route::get('/login',    'LoginController@index')->name('login');
Route::get('/register', 'RegisterController@index')->name('register');

Route::get('locale/{locale}', 'PageController@locale')->name('locale');

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
