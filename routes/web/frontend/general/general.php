<?php
Route::group(['namespace' => 'General'], function () {
    Route::match(['get', 'post'], '/{slug}', 'HomeController@slug')->where('slug', '.*');
});


