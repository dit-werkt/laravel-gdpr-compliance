<?php

use Illuminate\Support\Facades\Route;

Route::post('download', '\Dialect\Gdpr\Http\Controllers\GdprController@download');

Route::get('/show_terms', '\Dialect\Gdpr\Http\Controllers\GdprController@showTerms');
Route::post('terms_accepted', [
    'as' => 'terms_accepted',
    'uses' => '\Dialect\Gdpr\Http\Controllers\GdprController@termsAccepted',
]);
Route::post('terms_denied', [
    'as' => 'terms_denied',
    'uses' => '\Dialect\Gdpr\Http\Controllers\GdprController@termsDenied',
]);
