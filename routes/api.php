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


/*
 * 测试路由
 * 地址：ip + /vshop/public/api/test
*/
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api){
    $api->group(['namespace' => 'App\Http\Controllers\Api\Test'], function ($api){
        $api->get('/test','TestApiController@test');
    });
});