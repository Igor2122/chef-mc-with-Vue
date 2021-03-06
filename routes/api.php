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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get(
    '/users',
    function () {
        return \App\User::all();
    }
);
Route::get(
    '/products',
    function () {
        return \App\Product::all();
    }
);
Route::get(
    '/tasks',
    function () {
        return \App\Task::all();
    }
);


//Route::resource('/categories', 'Api\CategoriesController');
