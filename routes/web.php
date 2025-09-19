<?php

use Illuminate\Support\Facades\Route;

Route::get('verkoper', function () {
    return view('verkoper');
});

Route::get('contact', function () {
    return view('contact');
});
