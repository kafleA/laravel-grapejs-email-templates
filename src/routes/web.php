<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Amrit\GrapejsEmailTemplates\Http\Controllers'], function () {
    Route::get('templates', 'EmailTemplateController@index');
    Route::post('templates/store', 'EmailTemplateController@store');
    Route::get('templates/show/{id}', 'EmailTemplateController@show');
    Route::post('templates/update/{id}', 'EmailTemplateController@update');
    Route::get('templates/destroy/{id}', 'EmailTemplateController@destroy');
});