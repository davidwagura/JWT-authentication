<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
    Route::post('signin', 'SigninController');
    Route::post('signout', 'SignoutController');
    
    Route::post('me', 'MeController'); 
});