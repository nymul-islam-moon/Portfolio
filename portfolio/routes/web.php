<?php

use App\Http\Controllers\admin\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix' => 'admin', 'middleware' => 'AllowMac'], function () {

    Route::controller(HomeController::class)->prefix('/home')->group(function () {
        Route::get('/', 'index')->name('admin.home.index');
        Route::post('/submit', 'submit')->name('admin.home.submit');
    });

});
