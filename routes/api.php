<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::post('/todo', function() {
//	return post::create({
//
//		'title' => request('task'),
//		'content' => request('user_id'),
//	});
//});

Route::post("/todo/add",[taskcontroller::class,'tasks']);
//Route::post("/todo/status"[taskcontroller::class,'')
