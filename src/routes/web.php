<?php
/**
 * Created by PhpStorm.
 * User: sagar
 * Date: 8/3/19
 * Time: 9:39 AM
 */

Route::group(['middleware' => 'web', 'namespace' => 'Sagautam5\ChangePassword\Http\Controllers'], function () {

    Route::get('/changepassword', 'AuthController@changePassword')->name('password.change.form');

    Route::post('/changepassword', 'AuthController@postChangePassword')->name('password.change.store');
});
