<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {
	return View::make('index');
});

Route::get('galereya', function() {
    return View::make('gallery');
});

Route::get('kak-zakazat', function() {
    return View::make('about-order');
});

Route::get('nashi-klienti', function() {
    return View::make('our-clients');
});

Route::get('o-nas', function() {
    return View::make('about');
});

Route::get('kontakti', function() {
    return View::make('contacts');
});

Route::post('/', [ 'uses' => 'HomeController@postMail' ]);
Route::post('kontakti', [ 'uses' => 'HomeController@postMail' ]);

/* Наружная реклама - начало */

Route::controller('naruzhnaya-reklama/{name?}', 'OutdoorController');

Route::post('naruzhnaya-reklama', [ 'uses' => 'HomeController@postMail' ]);
Route::post('naruzhnaya-reklama/viveski', [ 'uses' => 'HomeController@postMail' ]);
Route::post('naruzhnaya-reklama/svetovie-koroba', [ 'uses' => 'HomeController@postMail' ]);
Route::post('naruzhnaya-reklama/obemnie-bukvi', [ 'uses' => 'HomeController@postMail' ]);
Route::post('naruzhnaya-reklama/stendi', [ 'uses' => 'HomeController@postMail' ]);
Route::post('naruzhnaya-reklama/oformlenie-fasadov', [ 'uses' => 'HomeController@postMail' ]);

/* Наружная реклама - конец */

/* Интерьерная реклама - начало */

Route::controller('interernaya-reklama/{name?}', 'InteriorController');

Route::post('interernaya-reklama', [ 'uses' => 'HomeController@postMail' ]);
Route::post('interernaya-reklama/viveski', [ 'uses' => 'HomeController@postMail' ]);
Route::post('interernaya-reklama/svetovie-koroba', [ 'uses' => 'HomeController@postMail' ]);
Route::post('interernaya-reklama/obemnie-bukvi', [ 'uses' => 'HomeController@postMail' ]);
Route::post('interernaya-reklama/stendi', [ 'uses' => 'HomeController@postMail' ]);
Route::post('interernaya-reklama/kompleksnoe-oformlenie', [ 'uses' => 'HomeController@postMail' ]);

/* Интерьерная реклама - конец */

/* Тентовые конструкции - начало */

Route::controller('tentovie-konstrukcii/{name?}', 'TentController');

Route::post('tentovie-konstrukcii', [ 'uses' => 'HomeController@postMail' ]);
Route::post('tentovie-konstrukcii/letnie-kafe', [ 'uses' => 'HomeController@postMail' ]);
Route::post('tentovie-konstrukcii/zonti', [ 'uses' => 'HomeController@postMail' ]);
Route::post('tentovie-konstrukcii/verandi', [ 'uses' => 'HomeController@postMail' ]);
Route::post('tentovie-konstrukcii/markizi', [ 'uses' => 'HomeController@postMail' ]);
Route::post('tentovie-konstrukcii/kozirki', [ 'uses' => 'HomeController@postMail' ]);

/* Тентовые конструкции - конец */

/* Разработка дизайна - начало */

Route::controller('razrabotka-disayna/{name?}', 'DesignController');

Route::post('razrabotka-disayna', [ 'uses' => 'HomeController@postMail' ]);
Route::post('razrabotka-disayna/naruzhnaya-reklama', [ 'uses' => 'HomeController@postMail' ]);
Route::post('razrabotka-disayna/interernaya-reklama', [ 'uses' => 'HomeController@postMail' ]);
Route::post('razrabotka-disayna/tentovie-konstrukcii', [ 'uses' => 'HomeController@postMail' ]);

/* Разработка дизайна - конец */

/* Услуги - начало */

Route::controller('uslugi/{name?}', 'ServicesController');

Route::post('uslugi', [ 'uses' => 'HomeController@postMail' ]);
Route::post('uslugi/naruzhnaya-reklama', [ 'uses' => 'HomeController@postMail' ]);
Route::post('uslugi/interernaya-reklama', [ 'uses' => 'HomeController@postMail' ]);
Route::post('uslugi/tentovie-konstrukcii', [ 'uses' => 'HomeController@postMail' ]);


/* Услуги - конец */

Route::controller('admin', 'AdminController');