<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthentificationController;
use App\Http\Controllers\feed\FeedController;

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

// Route::middleware('auth:sanctum')->get('feed/store', function (Request $request) {
//     return $request->user();
// });

Route::get('/test',function(){
    
});
Route::post('register',[AuthentificationController::class , 'register']);
Route::post('login',[AuthentificationController::class , 'login']);
Route::post('feed/store',[ FeedController::class , 'store'])->middleware('auth:sanctum');
Route::post('feed/like/{feed_id}',[FeedController::class , 'likePost'])->middleware('auth:sanctum');

Route::get('feeds',[FeedController::class , 'index'])->middleware('auth:sanctum');

Route::post('feed/comment/{feed_id}' , [ FeedController::class , 'comment'])->middleware('auth:sanctum');
Route::get('feed/comments/{feed_id}' , [ FeedController::class , 'getComments'])->middleware('auth:sanctum');