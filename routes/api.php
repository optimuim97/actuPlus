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






Route::resource('posts', App\Http\Controllers\API\PostAPIController::class);

Route::resource('media', App\Http\Controllers\API\MediaAPIController::class);



Route::resource('criticals', App\Http\Controllers\API\CriticalAPIController::class);

Route::resource('propositions', App\Http\Controllers\API\PropositionAPIController::class);

Route::resource('comment_types', App\Http\Controllers\API\CommentTypeAPIController::class);

Route::resource('likes', App\Http\Controllers\API\LikeAPIController::class);

Route::resource('entity_types', App\Http\Controllers\API\EntityTypeAPIController::class);

Route::resource('entities', App\Http\Controllers\API\EntityAPIController::class);

Route::resource('agents', App\Http\Controllers\API\AgentAPIController::class);

Route::resource('products', App\Http\Controllers\API\ProductAPIController::class);