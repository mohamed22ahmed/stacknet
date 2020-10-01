<?php

Route::group(['prefix'=>'comp','as'=>'comp.'],function(){
    Route::get('/','CompanyController@index')->name('index');
    Route::get('provider_profile','CompanyController@provider_profile')->name('provider_profile');

    Route::get('/profile','CompanyController@profile')->name('profile');
    Route::post('/profile_edit','CompanyController@profile_edit');
    Route::get('/security','CompanyController@security')->name('security');
    Route::post('/security_update','CompanyController@security_update');
    Route::get('/responsible_person','CompanyController@responsible_person')->name('responsible_person');
    Route::post('/responsible_person','CompanyController@responsible_person_update');

    Route::get('/request_details_to_stacknet','CompanyController@request_details_to_stacknet')->name('request_details_to_stacknet');

    Route::get('/direct_stacknet','CompanyController@direct_stacknet')->name('direct_stacknet');
    Route::get('/requests_to_stacknet','CompanyController@requests_to_stacknet')->name('requests_to_stacknet');
    Route::get('/make_stacknet_request','CompanyController@make_stacknet_request')->name('make_stacknet_request');
    Route::post('/make_stacknet_request','CompanyController@make_stacknet_request_post')->name('make_stacknet_request_post');
    Route::get('/requests_from_you','CompanyController@requests_from_you')->name('requests_from_you');
    Route::get('/make_medical_request','CompanyController@make_medical_request')->name('make_medical_request');
    Route::get('/request_details','CompanyController@request_details')->name('request_details');
    Route::get('/request_details_from_provider','CompanyController@request_details_from_provider')->name('request_details_from_provider');


    Route::get('/medical_network','CompanyController@medical_network')->name('medical_network');
    Route::post('/make_medical','CompanyController@send_medical_request');

    Route::get('/all_incoming_requests','CompanyController@all_incoming_requests')->name('all_incoming_requests');
    Route::get('/show_claims','CompanyController@show_claims')->name('show_claims');
});
