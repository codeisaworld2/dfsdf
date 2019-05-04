<?php
Route::group(['namespace' => 'Home','prefix' =>'home','as'=>'home.'],function(){
    //后台登录显示
    Route::get('login','LoginController@index')->name('login');
    Route::post('login','LoginController@login')->name('login');
    Route::get('article/index','ArticleController@index')->name('article.index');
    Route::get('article/add','ArticleController@add')->name('article.add');
    Route::get('article/update/{id}','ArticleController@update')->name('article.update');
    Route::post('article/store','ArticleController@store')->name('article.store');
    Route::put('article/edit/{id}','ArticleController@edit')->name('article.edit');
});
