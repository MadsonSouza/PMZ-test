<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('user', 'UserController@index');
Route::get('user/{id}', 'UserController@show');

Route::get('products', 'ProductController@index');
Route::get('product/{id}', 'ProductController@show');
