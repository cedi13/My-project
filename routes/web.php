<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    
});

Route::get( '/hello', 'App\Http\Controllers\HelloController@view');
Route::get( '/inventory', 'App\Http\Controllers\InventoryController@index');
