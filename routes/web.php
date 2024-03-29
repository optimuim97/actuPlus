<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Auth;
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

Route::get('accueil', function(){
    return view('welcome');
})->middleware(['guest']);

Route::redirect('/', '/accueil', 301);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('login/{role}', [FrontEndController::class, 'admin'])->name('admin');
Route::get('login/{role}', [FrontEndController::class, 'entity'])->name('entity');
Route::post('login-entity', [LoginController::class, 'loginEntity']);


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('posts', App\Http\Controllers\PostController::class);
    
    Route::resource('media', App\Http\Controllers\MediaController::class);
    
    Route::resource('criticals', App\Http\Controllers\CriticalController::class);
    
    Route::resource('propositions', App\Http\Controllers\PropositionController::class);
    
    Route::resource('commentTypes', App\Http\Controllers\CommentTypeController::class);
    
    Route::resource('likes', App\Http\Controllers\LikeController::class);
    
    Route::resource('entityTypes', App\Http\Controllers\EntityTypeController::class);
    
    Route::resource('entities', App\Http\Controllers\EntityController::class);

    Route::resource('agents', App\Http\Controllers\AgentController::class);
    
    Route::resource('products', App\Http\Controllers\ProductController::class);
    
    Route::resource('categories', App\Http\Controllers\CategoryController::class);
    
});

Route::resource('userLists', App\Http\Controllers\UserListController::class);