<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\usercontroller;

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

Route::post("post/article",[usercontroller::class,"Create_Article"]);
Route::post("update/article/{id}",[usercontroller::class,"Update_Article"]);
Route::delete("delete/article/{id}",[usercontroller::class,"Delete_Article"]);
Route::get("getown/article/{id}",[usercontroller::class,"View_My_Own_Articles"]);
Route::post("post/comment",[usercontroller::class,"Write_Comment"]);