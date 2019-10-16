<?php


Route::get('demo-function', 'Topic\Http\Controllers\UploadController@index');

Route::post('demo-function-upload', ['as'=>'demo-topic-upload',
                                    'uses'=>'Topic\Http\Controllers\UploadController@upload']);
