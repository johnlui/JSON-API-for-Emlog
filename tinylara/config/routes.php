<?php

use TinyLara\TinyRouter\TinyRouter as Route;

if ( !array_key_exists('token', $_GET) || $_GET['token'] != 'koanfoiuh32789gf782bqwiubuyiqwgd' ) {
  die("Fuck You!");
}

Route::get('site-info', 'HomeController@siteInfo');
Route::get('admin-info', 'UserController@adminInfo');
Route::get('articles/from/(:num)/to/(:num)', 'ArticleController@fromAToB');
Route::get('articles/(:num)', 'ArticleController@show');

Route::dispatch('View@process');