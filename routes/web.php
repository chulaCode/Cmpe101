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
Route::post('/loggingout','ProfileController@loggingOut')->name('loggingOut');

Route::get('/pretest','EnrollController@index')->name('pretest');
Route::get('/consent','EnrollController@survey')->name('survey.show');
Route::post('/survey','EnrollController@store')->name('survey.store');
Route::get('/quizpretest','EnrollController@pretest')->name('quiz.pretest');
Route::get('/quizconsent','EnrollController@consent')->name('consent');
Route::get('/land','EnrollController@land')->name('land');
Route::get('/landing','EnrollController@landing')->name('landing');
Route::get('/postland','EnrollController@postland')->name('postland');
Route::get('/postlanding','EnrollController@postlanding')->name('postlanding');
Route::get('/postsurvey','EnrollController@postSurvey')->name('post_survey');
Route::post('/loggingIn','EnrollController@entrance')->name('entrance');
Route::post('/access','EnrollController@entrance2')->name('entrance2');

Route::get('/profiles','ProfileController@index')->name('profile.show');

Route::get('/game','ProfileController@show')->name('profile.game');
Route::get('/practice','ProfileController@practice')->name('practice.game');
Route::post('/post','EnrollController@post')->name('post');


Route::get('/scoreboard','ProfileController@board')->name('score.board');
Route::post('/scores/{point}','ProfileController@postScore')->name("post.score");

Route::get('/question/{user}', 'ProfileController@display')->name('profile.display');

Route::get('/quizCount/{id}','ProfileController@count')->name('quiz.count');
Route::get('/quiz/{id}','ProfileController@quiz')->name('quiz');
Route::post('/quiz/{id}','ProfileController@quiz')->name('post.quiz');

/*

Route::get('/survey/{id}','EnrollController@quiz')->name('survey.quiz');
Route::post('/survey/{id}','EnrollController@quiz_post')->name('quiz.post');
Route::get('/postsurvey/{id}','EnrollController@postSurvey')->name('post_survey');
Route::post('/postSurvey/{id}','EnrollController@post')->name('survey.post');


Route::post('/profile/{user}','HomeController@store')->name('home.store');
//Route::post('/answer/{user}','ProfileController@quiz');
Route::get('/home/{user}', 'HomeController@index')->name('home.show');
Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfileController@update')->name('profile.update');
*/
