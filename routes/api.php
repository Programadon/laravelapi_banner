<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Exceptions\Handler;

use App\Http\Controllers\ControllerBanner;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Login:
Route::group(['prefix' => 'banner'], function () {
	Route::get('', [ControllerBanner::class, "listall"]);
	Route::get('{bannerid}', [ControllerBanner::class, "read"]);
	
	Route::post('create', [ControllerBanner::class, "create"]);		
	Route::put('update/{bannerid}', [ControllerBanner::class, "update"]);
	Route::delete('delete/{bannerid}', [ControllerBanner::class, "delete"]);	
});