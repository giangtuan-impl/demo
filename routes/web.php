<?php

use Illuminate\Support\Facades\Route;

Route::get('/demo/{id}/edit', 'DemoController@demoAction');
Route::get('/demo', function () {
    return view("demo-view::index");
});
