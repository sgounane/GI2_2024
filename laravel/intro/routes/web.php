<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/home/welcom', function () {
    return view('welcome');
});