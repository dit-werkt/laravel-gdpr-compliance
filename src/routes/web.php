<?php

use Illuminate\Support\Facades\Route;

Route::post('download', 'GdprController@download');

Route::get('/terms', 'GdprController@showTerms');
Route::post('terms/accepted', [
    'as' => 'terms_accepted',
    'uses' => 'GdprController@termsAccepted',
]);
Route::post('terms/denied', [
    'as' => 'terms_denied',
    'uses' => 'GdprController@termsDenied',
]);
