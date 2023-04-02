<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("/client",[ClientController::class, "index"]) ;
Route::get("/client/{id}",[ClientController::class, "one"]) ;
Route::get("/client/firstname/{name}",[ClientController::class, "many"]) ;
Route::get("/client/email/{id}",[ClientController::class, "email"]) ;
Route::get("/client/search/order",[ClientController::class, "ord"]) ;
Route::get("/client/search/first",[ClientController::class, "first"]) ;
Route::post("/client/insert",[ClientController::class, "insert"]) ;
Route::post("/client/edit/{id}",[ClientController::class, "edit"]) ;
Route::delete("/client/delete/{id}",[ClientController::class, "delete"]) ;

Route::get("/detail",[DetailController::class, "index"]) ;
Route::post("/detail/insert",[DetailController::class, "insert"]) ;
Route::post("/detail/edit/{id}",[DetailController::class, "edit"]) ;
Route::delete("/detail/delete/{id}",[DetailController::class, "delete"]) ;