<?php

use Illuminate\Support\Facades\Route;
use Modules\Homepage\app\Http\Controllers\HomepageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::group([], function () {
//    Route::resource('homepage', HomepageController::class)->names('homepage');
//});

Route::get('/', [HomepageController::class, 'index'] );

