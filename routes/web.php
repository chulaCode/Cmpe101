<?php

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

Auth::routes();
Route::post('/post','PostController@store');
Route::get('/profile/create','PostController@create');
//Route::post('/profile','PostController@store');
Route::get('/score','ProfileController@score')->name("score");

Route::post('/enrol','EnrollController@index')->name('enrol.index');
Route::get('/survey','EnrollController@survey')->name('survey.show');
Route::post('/survey','EnrollController@store')->name('survey.store');
Route::post('/answer','AnswerController@index');

Route::get('/quiz/{id}','ProfileController@quiz')->name('quiz');
Route::post('/quiz/{id}','ProfileController@quiz')->name('post.quiz');

Route::get('/survey/{id}','EnrollController@quiz')->name('survey.quiz');
Route::post('/survey/{id}','EnrollController@quiz_post')->name('quiz.post');
Route::get('/postsurvey/{id}','EnrollController@postSurvey')->name('post_survey');
Route::post('/postSurvey/{id}','EnrollController@post')->name('survey.post');

Route::post('/scores/{point}','ProfileController@postScore')->name("post.score");
Route::get('/scoreboard','ProfileController@board')->name('score.board');

Route::get('/game/{user}','ProfileController@show')->name('profile.game');
Route::get('/practice/{user}','ProfileController@practice')->name('practice.game');
Route::post('/profile/{user}','HomeController@store')->name('home.store');
//Route::post('/answer/{user}','ProfileController@quiz');
Route::get('/home/{user}', 'HomeController@index')->name('home.show');
Route::get('/profile/{user}','ProfileController@index')->name('profile.show');
Route::get('/question/{user}', 'ProfileController@display')->name('profile.display');
Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfileController@update')->name('profile.update');

