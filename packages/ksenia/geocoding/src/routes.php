
<?php

Route::get('/geo', '\Ksenia\Geocoding\GeocodingController@coords')->name('coords');
Route::get('/rev', '\Ksenia\Geocoding\GeocodingController@address')->name('address');
