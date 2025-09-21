<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Blade;

Blade::component('layouts.app', 'layouts.app');


Route::view('/contact', 'contact');

Route::view('/verkoper', 'verkoper.verkoper');
