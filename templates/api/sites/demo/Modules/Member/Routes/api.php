<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/member', function (Request $request) {
    return $request->user();
});

Route::get('/member/demo', function() {
    return [
        'member echo 1', 'echo 2', 'echo 3'
    ];
});