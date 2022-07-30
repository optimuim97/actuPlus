<?php

use App\Http\Controllers\API\CommentAPIController;
use App\Http\Controllers\API\LikeAPIController;
use App\Http\Controllers\API\PostAPIController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LikeController;
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


Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function() {
    // User
    Route::put('/user', [AuthController::class, 'update']);
    Route::post('/logout', [AuthController::class, 'logout']);

    // Post
    Route::get('/posts', [PostAPIController::class, 'index']); // all posts
    Route::post('/posts', [PostAPIController::class, 'store']); // create post
    Route::get('/posts/{id}', [PostAPIController::class, 'show']); // get single post
    Route::put('/posts/{id}', [PostAPIController::class, 'update']); // update post
    Route::delete('/posts/{id}', [PostAPIController::class, 'destroy']); // delete post
    Route::post('/posts-limited', [PostAPIController::class, 'limited']); // delete post

    // Comment
    Route::get('/posts/{id}/comments', [CommentAPIController::class, 'index']); // all comments of a post
    Route::post('/posts/{id}/comments', [CommentAPIController::class, 'store']); // create comment on a post
    Route::put('/comments/{id}', [CommentAPIController::class, 'update']); // update a comment
    Route::delete('/comments/{id}', [CommentAPIController::class, 'destroy']); // delete a comment

    // Like
    Route::post('/posts/{id}/likes', [LikeAPIController::class, 'likeOrUnlike']); // like or dislike back a post
    Route::post('/posts/{id}/entity', [PostAPIController::class, 'getPostByEntity']); // like or dislike back a post
});

Route::resource('posts', App\Http\Controllers\API\PostAPIController::class);

Route::resource('media', App\Http\Controllers\API\MediaAPIController::class);

Route::resource('criticals', App\Http\Controllers\API\CriticalAPIController::class);

Route::resource('propositions', App\Http\Controllers\API\PropositionAPIController::class);

Route::resource('comment_types', App\Http\Controllers\API\CommentTypeAPIController::class);

Route::resource('entity_types', App\Http\Controllers\API\EntityTypeAPIController::class);

Route::resource('entities', App\Http\Controllers\API\EntityAPIController::class);

Route::resource('agents', App\Http\Controllers\API\AgentAPIController::class);

Route::resource('products', App\Http\Controllers\API\ProductAPIController::class);

Route::resource('categories', App\Http\Controllers\API\CategoryAPIController::class);
