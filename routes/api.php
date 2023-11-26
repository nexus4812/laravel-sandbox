<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use \Illuminate\Routing\Router;

/** @var Router $route */
$route = resolve(Router::class);

$route->middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
