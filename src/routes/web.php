<?php

use Illuminate\Support\Facades\Route;

Route::post('download', 'GdprController@download');

Route::get('/terms', [
    'as' => 'gdpr-terms',
    'uses' => 'GdprController@showTerms',
]);
Route::post('terms/accepted', [
    'as' => 'gdpr-terms_accepted',
    'uses' => 'GdprController@termsAccepted',
]);
Route::post('terms/denied', [
    'as' => 'gdpr-terms_denied',
    'uses' => 'GdprController@termsDenied',
]);
