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

Route::get('/', 'PageController@index')->name('home');

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

Route::post('/contact',       'ContactController@store')->name('contact.store'); // Sending contact email

Route::middleware(['auth'])->group(function () {

    // Company profile
    Route::middleware(['company'])->group(function () {
        Route::prefix('/company')->group(function () {
            Route::get('/profile',     'CompanyController@edit')->name('company.edit');
            Route::post('/update',     'CompanyController@update')->name('company.update');
            Route::post('/logo',       'CompanyController@logo')->name('company.logo');
        });

        Route::prefix('/vacancies')->group(function () {
            Route::get('/',        'VacancyController@index')->name('vacancies');
            Route::get('/new',     'VacancyController@create')->name('vacancies.create');
            Route::post('/store',  'VacancyController@store')->name('vacancies.store');

            Route::get('/applicants', 'VacancyController@applicants')->name('vacancies.applicants');
        });
    });

    Route::post('/certificate/levels', 'CertificateController@levels')->name('certificate.levels');
    

    // Applicant profile

    Route::middleware(['applicant'])->group(function () {
        Route::prefix('/applicant')->group(function () {
            Route::get('/profile',        'ApplicantController@edit')->name('applicant.edit');
            Route::post('/update',        'ApplicantController@update')->name('applicant.update');
            Route::post('/photo',         'ApplicantController@photo')->name('applicant.photo');
        });
    });

    Route::prefix('password')->group(function () {
        Route::get('/profile/{type}',  'PasswordController@edit')->name('password.edit');
        Route::post('/update',         'PasswordController@update')->name('password.update');
    });
    
});

Route::get('/resume', 'PageController@pdf');

Route::prefix('dashboard')->group(function () {
    
    Route::get('/', 'PageController@dashboard')->name('dashboard');

    Route::prefix('vacancies')->group(function () {
        Route::get('/create', 'PageController@vacancies')->name('dashboard.vacancies');
    });

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


    Route::prefix('vacancy')->group(function () {
        Route::get('/create', 'VacancyController@create')->name('vacancy.create');
        Route::post('/store', 'VacancyController@store')->name('vacancy.store');
    });
});
