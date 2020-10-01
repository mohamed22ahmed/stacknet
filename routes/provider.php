<?php

Route::group(['prefix'=>'prov','as'=>'prov.'],function(){
    Route::get('/','ProviderController@index')->name('index');
    Route::get('/profile','ProviderController@profile')->name('profile');
    Route::get('/security','ProviderController@security')->name('security');
    Route::get('/responsible_person','ProviderController@responsible_person')->name('responsible_person');

    Route::get('/company_profile','ProviderController@company_profile')->name('company_profile');
    Route::get('/accepted_requests','ProviderController@accepted_requests')->name('accepted_requests');
    Route::get('/claims','ProviderController@claims')->name('claims');
    Route::post('/upload_claims','ProviderController@uploadClaims');
    Route::get('/all_incoming_requests','ProviderController@all_incoming_requests')->name('all_incoming_requests');
    Route::get('/accept_request/{id}','ProviderController@accept_request');
    Route::get('/refuse_request/{id}','ProviderController@refuse_request');
    Route::get('/make_request','ProviderController@make_request')->name('make_request');
    Route::post('/make_request','ProviderController@make_request_post')->name('make_request_post');
    Route::get('/request_details','ProviderController@request_details')->name('request_details');
    Route::get('/request_details_from_company','ProviderController@request_details_from_company')->name('request_details_from_company');

});
