<?php


Route::group(['prefix'=>'adm','as'=>'admin.'],function(){
    Route::get('/login','AdminController@admin_login')->name('login');
    Route::post('/login','AdminController@loginDone');
    Route::get('/','AdminController@index')->name('index');
    Route::get('new_user','AdminController@new_user')->name('new_user');
    Route::get('/accept_provider/{id}','AdminController@accept_provider')->name('accept_provider');
    Route::get('/refuse_provider/{id}','AdminController@refuse_provider')->name('refuse_provider');
    Route::get('/accept_company/{id}','AdminController@accept_company')->name('accept_company');
    Route::get('/refuse_company/{id}','AdminController@refuse_company')->name('refuse_company');

    Route::get('new_contract','AdminController@new_contract')->name('new_contract');

    Route::get('company_direct','AdminController@company_direct')->name('company_direct');
    Route::get('agree_direct_request/{id}','AdminController@agree_direct_request')->name('agree_direct_request');

});
