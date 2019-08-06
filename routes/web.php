<?php

Route::group([
    'namespace' => "Web",
    'as' => "web."
], function () {
    /** Home */
    Route::get('/', 'EmailController@index')->name('index');

    /** Send-Mail */
    Route::post('emails/store', 'EmailController@store')->name('emails.store');
});
