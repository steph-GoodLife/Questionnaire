<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionnaireController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/questionnaires/create', 'QuestionnaireController@create');

Route::post('/questionnaires','QuestionnaireController@store');
Route::get('/questionnaires/{questionnaire}','QuestionnaireController@show');

Route::get('/questionnaires/{questionnaire}/questions/create', 'QuestionController@create');
Route::post('/questionnaires/{questionnaire}/questions', 'QuestionController@store');
Route::delete('/questionnaires/{questionnaire}/questions/{question}', 'QuestionController@destroy');

Route::get('/surveys/{questionnaire}-{slug}','SurveyController@show');
Route::post('/surveys/{questionnaire}-{slug}', 'SurveyController@store');
Route::get('/surveys/merci', 'SurveyController@merci');



