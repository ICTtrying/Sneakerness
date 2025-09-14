<?php
use App\Http\Controllers\JobController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;
use App\models\Job;

Route::get('/', [homeController::class, 'index']);
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/{id}', [JobController::class, 'showjobs']);
Route::get('/contact', [contactController::class, 'index']);
Route::get('/testpage', [testController::class, 'index']);
Route::post('/testpage', [JobController::class, 'addjob']);
?>